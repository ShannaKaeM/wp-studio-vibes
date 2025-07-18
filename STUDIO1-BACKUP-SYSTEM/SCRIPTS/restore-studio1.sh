#!/bin/bash

# Studio1 Restore System
# This script helps restore from backups
# Usage: 
#   ./restore-studio1.sh list         # List available backups
#   ./restore-studio1.sh current      # Restore from current backup
#   ./restore-studio1.sh milestone    # Interactive milestone selection

set -e

# Configuration
BACKUP_ROOT="/Users/shannamiddleton/STUDIO1-BACKUP-SYSTEM"
CURRENT_BACKUP_DIR="$BACKUP_ROOT/CURRENT-BACKUP"
MILESTONES_DIR="$BACKUP_ROOT/MILESTONES"
RESTORE_TARGET="/Users/shannamiddleton/Local Drive Mac/mi agency/miProjects/Studio1-RESTORED"

# Colors for output
RED='\033[0;31m'
GREEN='\033[0;32m'
YELLOW='\033[1;33m'
BLUE='\033[0;34m'
NC='\033[0m' # No Color

print_status() {
    echo -e "${BLUE}[STUDIO1 RESTORE]${NC} $1"
}

print_success() {
    echo -e "${GREEN}[SUCCESS]${NC} $1"
}

print_warning() {
    echo -e "${YELLOW}[WARNING]${NC} $1"
}

print_error() {
    echo -e "${RED}[ERROR]${NC} $1"
}

# Function to list available backups
list_backups() {
    print_status "Available Studio1 Backups"
    echo "=========================="
    
    echo -e "\n${BLUE}Current Backup:${NC}"
    if [ -d "$CURRENT_BACKUP_DIR/Studio1" ]; then
        echo "  ✅ Available at: $CURRENT_BACKUP_DIR/Studio1"
        if [ -f "$CURRENT_BACKUP_DIR/BACKUP-INFO.txt" ]; then
            echo "  📅 $(grep "Backup Date:" "$CURRENT_BACKUP_DIR/BACKUP-INFO.txt" | cut -d' ' -f3-)"
            echo "  💾 $(grep "Backup Size:" "$CURRENT_BACKUP_DIR/BACKUP-INFO.txt" | cut -d' ' -f3-)"
        fi
    else
        echo "  ❌ No current backup available"
    fi
    
    echo -e "\n${BLUE}Milestone Backups:${NC}"
    local milestones=($(find "$MILESTONES_DIR" -maxdepth 1 -type d -name "Studio1-Milestone-*" | sort -r))
    
    if [ ${#milestones[@]} -eq 0 ]; then
        echo "  ❌ No milestone backups available"
    else
        for i in "${!milestones[@]}"; do
            local dir="${milestones[$i]}"
            local name=$(basename "$dir")
            local num=$((i + 1))
            echo "  $num. $name"
            if [ -f "$dir/MILESTONE-INFO.txt" ]; then
                local date=$(grep "Backup Date:" "$dir/MILESTONE-INFO.txt" | cut -d' ' -f3-)
                local desc=$(grep "Description:" "$dir/MILESTONE-INFO.txt" | cut -d' ' -f2-)
                echo "     📅 $date"
                if [ "$desc" != "No description provided" ]; then
                    echo "     📝 $desc"
                fi
            fi
            echo ""
        done
    fi
}

# Function to restore from current backup
restore_current() {
    if [ ! -d "$CURRENT_BACKUP_DIR/Studio1" ]; then
        print_error "No current backup available to restore from"
        exit 1
    fi
    
    print_warning "This will create a restored copy at: $RESTORE_TARGET"
    echo -e "${YELLOW}Continue? (y/N):${NC}"
    read -r confirm
    
    if [[ ! "$confirm" =~ ^[Yy]$ ]]; then
        print_status "Restore cancelled"
        exit 0
    fi
    
    # Remove existing restore if it exists
    if [ -d "$RESTORE_TARGET" ]; then
        print_status "Removing existing restore directory..."
        rm -rf "$RESTORE_TARGET"
    fi
    
    print_status "Restoring from current backup..."
    cp -R "$CURRENT_BACKUP_DIR/Studio1" "$RESTORE_TARGET"
    
    # Create restore info
    cat > "$RESTORE_TARGET/RESTORE-INFO.txt" << EOF
Studio1 Restore Information
===========================
Restored Date: $(date)
Restored From: Current Backup
Original Backup: $CURRENT_BACKUP_DIR/Studio1
Restore Location: $RESTORE_TARGET

This is a restored copy of Studio1 from the current backup.
You can safely work with this without affecting the original backup.

Next Steps:
1. If using Local, import this as a new site
2. Update any configuration files if needed
3. Test functionality before making changes
EOF
    
    print_success "Current backup restored successfully!"
    print_status "Restored to: $RESTORE_TARGET"
}

# Function to restore from milestone
restore_milestone() {
    local milestones=($(find "$MILESTONES_DIR" -maxdepth 1 -type d -name "Studio1-Milestone-*" | sort -r))
    
    if [ ${#milestones[@]} -eq 0 ]; then
        print_error "No milestone backups available to restore from"
        exit 1
    fi
    
    echo -e "${BLUE}Available Milestone Backups:${NC}"
    for i in "${!milestones[@]}"; do
        local dir="${milestones[$i]}"
        local name=$(basename "$dir")
        local num=$((i + 1))
        echo "  $num. $name"
        if [ -f "$dir/MILESTONE-INFO.txt" ]; then
            local desc=$(grep "Description:" "$dir/MILESTONE-INFO.txt" | cut -d' ' -f2-)
            if [ "$desc" != "No description provided" ]; then
                echo "     📝 $desc"
            fi
        fi
    done
    
    echo -e "\n${YELLOW}Enter milestone number to restore (1-${#milestones[@]}):${NC}"
    read -r choice
    
    if ! [[ "$choice" =~ ^[0-9]+$ ]] || [ "$choice" -lt 1 ] || [ "$choice" -gt ${#milestones[@]} ]; then
        print_error "Invalid selection"
        exit 1
    fi
    
    local selected_milestone="${milestones[$((choice - 1))]}"
    local milestone_name=$(basename "$selected_milestone")
    
    print_warning "This will restore milestone: $milestone_name"
    print_warning "Restore location: $RESTORE_TARGET"
    echo -e "${YELLOW}Continue? (y/N):${NC}"
    read -r confirm
    
    if [[ ! "$confirm" =~ ^[Yy]$ ]]; then
        print_status "Restore cancelled"
        exit 0
    fi
    
    # Remove existing restore if it exists
    if [ -d "$RESTORE_TARGET" ]; then
        print_status "Removing existing restore directory..."
        rm -rf "$RESTORE_TARGET"
    fi
    
    print_status "Restoring from milestone: $milestone_name"
    cp -R "$selected_milestone" "$RESTORE_TARGET"
    
    # Create restore info
    cat > "$RESTORE_TARGET/RESTORE-INFO.txt" << EOF
Studio1 Restore Information
===========================
Restored Date: $(date)
Restored From: Milestone Backup
Milestone: $milestone_name
Original Backup: $selected_milestone
Restore Location: $RESTORE_TARGET

This is a restored copy of Studio1 from a milestone backup.
You can safely work with this without affecting the original backup.

Original Milestone Info:
$(cat "$selected_milestone/MILESTONE-INFO.txt" 2>/dev/null || echo "No milestone info available")

Next Steps:
1. If using Local, import this as a new site
2. Update any configuration files if needed
3. Test functionality before making changes
EOF
    
    print_success "Milestone backup restored successfully!"
    print_status "Restored to: $RESTORE_TARGET"
}

# Main script logic
case "${1:-list}" in
    "list")
        list_backups
        ;;
    
    "current")
        restore_current
        ;;
    
    "milestone")
        restore_milestone
        ;;
    
    *)
        echo "Usage: $0 {list|current|milestone}"
        echo ""
        echo "Commands:"
        echo "  list       - List all available backups"
        echo "  current    - Restore from current backup"
        echo "  milestone  - Interactive milestone selection and restore"
        exit 1
        ;;
esac