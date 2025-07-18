#!/bin/bash

# Studio1 Comprehensive Backup System
# This script creates full backups with milestone preservation
# Usage: 
#   ./backup-studio1.sh current     # Overwrite current backup
#   ./backup-studio1.sh milestone   # Create timestamped milestone
#   ./backup-studio1.sh both        # Do both current + milestone

set -e

# Configuration
SOURCE_DIR="/Users/shannamiddleton/Local Drive Mac/mi agency/miProjects/Studio1"
BACKUP_ROOT="/Users/shannamiddleton/STUDIO1-BACKUP-SYSTEM"
CURRENT_BACKUP_DIR="$BACKUP_ROOT/CURRENT-BACKUP"
MILESTONES_DIR="$BACKUP_ROOT/MILESTONES"

# Colors for output
RED='\033[0;31m'
GREEN='\033[0;32m'
YELLOW='\033[1;33m'
BLUE='\033[0;34m'
NC='\033[0m' # No Color

# Function to print colored output
print_status() {
    echo -e "${BLUE}[STUDIO1 BACKUP]${NC} $1"
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

# Function to get backup size
get_backup_size() {
    local dir="$1"
    if [ -d "$dir" ]; then
        du -sh "$dir" | cut -f1
    else
        echo "N/A"
    fi
}

# Function to create current backup (overwrites existing)
create_current_backup() {
    print_status "Creating current backup (overwriting existing)..."
    
    # Remove existing current backup
    if [ -d "$CURRENT_BACKUP_DIR/Studio1" ]; then
        print_status "Removing existing current backup..."
        rm -rf "$CURRENT_BACKUP_DIR/Studio1"
    fi
    
    # Create fresh current backup
    print_status "Copying Studio1 project to current backup..."
    cp -R "$SOURCE_DIR" "$CURRENT_BACKUP_DIR/"
    
    # Create backup info file
    cat > "$CURRENT_BACKUP_DIR/BACKUP-INFO.txt" << EOF
Studio1 Current Backup
=====================
Backup Date: $(date)
Source: $SOURCE_DIR
Backup Size: $(get_backup_size "$CURRENT_BACKUP_DIR/Studio1")
Backup Type: Current (Overwriting)

This is the current working backup that gets overwritten each time.
For permanent milestone backups, see the MILESTONES directory.

Files Included:
- Complete WordPress Local site
- S4 plugin with Visual Pattern Builder
- All project documentation
- Local configuration files
- Git repository (.git directory)
EOF
    
    print_success "Current backup created successfully!"
    print_status "Location: $CURRENT_BACKUP_DIR/Studio1"
    print_status "Size: $(get_backup_size "$CURRENT_BACKUP_DIR/Studio1")"
}

# Function to create milestone backup (timestamped, permanent)
create_milestone_backup() {
    local timestamp=$(date +"%Y%m%d-%H%M%S")
    local milestone_name="Studio1-Milestone-$timestamp"
    local milestone_dir="$MILESTONES_DIR/$milestone_name"
    
    print_status "Creating milestone backup: $milestone_name"
    
    # Create milestone backup
    cp -R "$SOURCE_DIR" "$milestone_dir/"
    
    # Prompt for milestone description
    echo -e "${YELLOW}Enter a description for this milestone (or press Enter to skip):${NC}"
    read -r milestone_description
    
    # Create milestone info file
    cat > "$milestone_dir/MILESTONE-INFO.txt" << EOF
Studio1 Milestone Backup
========================
Milestone: $milestone_name
Backup Date: $(date)
Source: $SOURCE_DIR
Backup Size: $(get_backup_size "$milestone_dir")
Description: ${milestone_description:-"No description provided"}

This is a permanent milestone backup preserved for future reference.
This backup will NOT be overwritten by future backup operations.

Milestone Contents:
- Complete WordPress Local site at time of backup
- S4 plugin with Visual Pattern Builder
- All project documentation and assets
- Local configuration files
- Git repository state (.git directory)

To restore from this milestone:
1. Stop Local site if running
2. Copy contents to your desired location
3. Import into Local or update paths as needed
EOF
    
    print_success "Milestone backup created successfully!"
    print_status "Location: $milestone_dir"
    print_status "Size: $(get_backup_size "$milestone_dir")"
    
    # Update milestones index
    echo "$(date): $milestone_name - ${milestone_description:-"No description"}" >> "$MILESTONES_DIR/MILESTONES-INDEX.txt"
}

# Function to show backup status
show_backup_status() {
    print_status "Studio1 Backup System Status"
    echo "================================"
    
    echo -e "\n${BLUE}Current Backup:${NC}"
    if [ -d "$CURRENT_BACKUP_DIR/Studio1" ]; then
        echo "  Status: ✅ Available"
        echo "  Location: $CURRENT_BACKUP_DIR/Studio1"
        echo "  Size: $(get_backup_size "$CURRENT_BACKUP_DIR/Studio1")"
        if [ -f "$CURRENT_BACKUP_DIR/BACKUP-INFO.txt" ]; then
            echo "  Last Updated: $(grep "Backup Date:" "$CURRENT_BACKUP_DIR/BACKUP-INFO.txt" | cut -d' ' -f3-)"
        fi
    else
        echo "  Status: ❌ No current backup exists"
    fi
    
    echo -e "\n${BLUE}Milestone Backups:${NC}"
    local milestone_count=$(find "$MILESTONES_DIR" -maxdepth 1 -type d -name "Studio1-Milestone-*" | wc -l)
    echo "  Count: $milestone_count milestones"
    
    if [ $milestone_count -gt 0 ]; then
        echo "  Recent milestones:"
        find "$MILESTONES_DIR" -maxdepth 1 -type d -name "Studio1-Milestone-*" | sort -r | head -5 | while read -r dir; do
            local name=$(basename "$dir")
            local size=$(get_backup_size "$dir")
            echo "    - $name ($size)"
        done
    fi
    
    echo -e "\n${BLUE}Total Storage Used:${NC}"
    echo "  Backup System: $(get_backup_size "$BACKUP_ROOT")"
    
    echo -e "\n${BLUE}Available Commands:${NC}"
    echo "  ./backup-studio1.sh current     - Create/update current backup"
    echo "  ./backup-studio1.sh milestone   - Create new milestone backup"
    echo "  ./backup-studio1.sh both        - Create both current + milestone"
    echo "  ./backup-studio1.sh status      - Show this status (default)"
}

# Main script logic
case "${1:-status}" in
    "current")
        print_status "Starting current backup process..."
        if [ ! -d "$SOURCE_DIR" ]; then
            print_error "Source directory not found: $SOURCE_DIR"
            exit 1
        fi
        create_current_backup
        ;;
    
    "milestone")
        print_status "Starting milestone backup process..."
        if [ ! -d "$SOURCE_DIR" ]; then
            print_error "Source directory not found: $SOURCE_DIR"
            exit 1
        fi
        create_milestone_backup
        ;;
    
    "both")
        print_status "Starting both current and milestone backup process..."
        if [ ! -d "$SOURCE_DIR" ]; then
            print_error "Source directory not found: $SOURCE_DIR"
            exit 1
        fi
        create_current_backup
        echo ""
        create_milestone_backup
        ;;
    
    "status"|*)
        show_backup_status
        ;;
esac

echo ""
print_success "Backup operation completed!"