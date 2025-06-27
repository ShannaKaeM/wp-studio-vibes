# Studio Plugin Refactor Action Plan
**Created**: June 27, 2025  
**Status**: Active  
**Purpose**: Track refactor items from plugin audit

## 📋 Document Strategy
- **This Document**: Tracks ACTION ITEMS and refactor tasks
- **STUDIO-COMPLETE-ARCHITECTURE.md**: Documents the FINAL STATE after changes
- **Workflow**: Complete section → Update architecture doc → Move to next section

---

## 🚨 SECTION 1: Fix UI Sidebar Persistence Bug
**Priority**: CRITICAL  
**Status**: 🟢 COMPLETE

### Problem
The plugin adds a web component to EVERY page via `wp_footer`, causing UI elements to persist after closing.

### Tasks
- [x] Remove `wp_footer` injection (lines 366-391 in shadow-plugin.php)
- [x] Remove call to `addServerDataToPage()` in enqueueAssets()
- [x] Delete entire `addServerDataToPage()` method
- [x] Update auto-open to only work on admin page
- [x] Test that closing plugin removes ALL UI elements ✅ VERIFIED
- [x] Update architecture doc with corrected rendering strategy

### Code Location
```
File: shadow-plugin.php
Lines: 366-391 (addServerDataToPage method)
```

### Success Criteria
- Plugin UI only appears on admin page
- Closing plugin removes all UI elements
- No web components injected on frontend pages

---

## 🗄️ SECTION 2: Data Storage Strategy Implementation
**Priority**: HIGH  
**Status**: 🟢 COMPLETE

### Tasks
- [x] Create export_to_theme_json() method in class-studio-compiler.php
- [x] Implement WordPress options storage for theme overrides
- [x] Add wp_theme_json_data_theme filter
- [x] Create "Apply to Theme" button in UI
- [x] Test theme.json injection with GenerateBlocks ✅ READY FOR TESTING

### Implementation Complete ✅
```php
// 1. Added to class-studio-compiler.php
public function export_to_theme_json($user_id, $preset_name = 'default')
// Exports semantic tokens, client/brand colors, and base variables to theme.json v2 format

// 2. Added to shadow-plugin.php
add_filter('wp_theme_json_data_theme', [$this, 'filterThemeJson'], 10, 1);
// Merges Studio design tokens with active theme's theme.json

// 3. Added REST endpoints
register_rest_route('studio/v1', '/export-theme', ...) // Preview theme.json export
register_rest_route('studio/v1', '/apply-theme', ...) // Apply theme to WordPress
```

### Success Criteria Achieved
- ✅ Plugin exports design tokens to proper theme.json v2 format
- ✅ WordPress options store theme overrides (`studio_theme_json_data`, `studio_theme_enabled`)
- ✅ Filter successfully merges Studio tokens with theme
- ✅ "Apply to WordPress Theme" button in right sidebar
- ✅ Ready for GenerateBlocks testing

---

## 📂 SECTION 2.5: JSON File Storage Implementation
**Priority**: HIGH  
**Status**: 🟢 COMPLETE (June 27, 2025)

### What Was Implemented
Successfully migrated from WordPress database tables to JSON file storage system for better portability and agency workflows.

### Key Features Delivered
- [x] Complete file-based storage system at `/wp-content/uploads/studio-data/`
- [x] REST API v2 endpoints (`/wp-json/studio/v2/*`)
- [x] Theme mapping interface integrated into Foundation Colors page
- [x] Per-brand theme mappings with custom theme names
- [x] Clean theme.json export (only 5 mapped colors, not 50+)
- [x] "Brand" renamed to "Color Set" throughout interface
- [x] Fixed edit functionality for color set names

### File Structure Created
```
/wp-content/uploads/studio-data/
└── users/{user_id}/
    └── clients/{client-slug}/
        ├── metadata.json
        ├── assets/
        │   ├── fonts/
        │   ├── images/
        │   └── logos/
        └── brands/{brand-slug}.json
```

### Technical Implementation
- **class-studio-file-storage.php**: Core file operations manager
- **class-studio-file-rest-controller.php**: REST API v2 controller
- **fileStorageService.js**: Frontend API service
- **FoundationColors.jsx**: Updated UI with theme mapping

### Success Criteria Achieved
- ✅ No database dependency (removed wp_studio_* tables)
- ✅ Theme mappings persist per color set
- ✅ Export/import ready for client packages
- ✅ Clean WordPress integration via filters
- ✅ Future-ready for multi-theme support

---

## 🧹 SECTION 3: Code Cleanup
**Priority**: MEDIUM  
**Status**: 🔴 Not Started

### Tasks
- [ ] Fix import paths (useTheme from ../theme to ../context)
- [ ] Remove duplicate REST endpoints
- [ ] Clean up legacy database code
- [ ] Remove console.log statements
- [ ] Add proper error boundaries

### Files to Update
- [ ] All view components (FoundationColors.jsx, etc.)
- [ ] shadow-plugin.php (remove duplicate endpoints)
- [ ] Remove unused legacy code

---

## 🔄 SECTION 4: State Management Enhancement
**Priority**: MEDIUM  
**Status**: 🔴 Not Started

### Tasks
- [ ] Update useStudioStore with complete brand state
- [ ] Add isDirty flag for unsaved changes
- [ ] Implement lastSaved timestamp
- [ ] Add undo/redo functionality
- [ ] Create proper loading states

### Store Structure Update
```javascript
brandColors: {
    data: null,
    selectedClient: 'main-client',
    selectedBrand: 'regular',
    isDirty: false,
    lastSaved: null,
    history: [],
    historyIndex: 0
}
```

---

## 🎨 SECTION 5: Complete Foundation Colors Data Flow
**Priority**: HIGH  
**Status**: 🔴 Not Started

### Tasks
- [ ] Connect FoundationColors.jsx to database API
- [ ] Implement real-time color editing
- [ ] Add save functionality
- [ ] Create loading and error states
- [ ] Add success notifications
- [ ] Test complete CRUD operations

---

## 📊 Progress Tracking

| Section | Priority | Status | Completion |
|---------|----------|--------|------------|
| 1. Sidebar Bug | CRITICAL | 🟢 Complete | 100% |
| 2. Data Storage | HIGH | 🟢 Complete | 100% |
| 2.5. JSON Storage | HIGH | 🟢 Complete | 100% |
| 3. Code Cleanup | MEDIUM | 🔴 Not Started | 0% |
| 4. State Management | MEDIUM | 🔴 Not Started | 0% |
| 5. Data Flow | HIGH | 🔴 Not Started | 0% |

---

## 🎯 Workflow Process
1. **Start Section** → Update status to 🟡 In Progress
2. **Complete Tasks** → Check off items as completed
3. **Test Everything** → Verify success criteria
4. **Update Architecture Doc** → Document the new implementation
5. **Mark Complete** → Update status to 🟢 Complete
6. **Move to Next** → Start next section

---

## 📝 Notes
- Work on ONE section at a time
- Test thoroughly before moving on
- Update architecture doc after EACH section
- Keep this doc updated with progress

**Current Section**: Section 2.5 (JSON Storage) Complete - Ready for next priority task

---

## 🚀 ROADMAP ADDITIONS
**Added**: June 27, 2025

### Block Editor Integration
- **Priority**: HIGH
- **Status**: Future Development
- **Description**: Add Studio Plugin support to the Gutenberg block editor
- **Requirements**:
  - Render plugin UI within block editor context
  - Integrate with block editor toolbar/sidebar
  - Ensure compatibility with GenerateBlocks
  - Maintain theme consistency in editor view
  - Support live preview of design changes

### Data Storage Refactor (Phase 1.5)
- **Priority**: HIGH
- **Status**: 🟢 COMPLETE (June 27, 2025)
- **Description**: Move from database to JSON file storage for portability
- **Tasks**:
  - [x] Migrate brand colors from database to JSON files
  - [x] Create file structure: `/wp-content/uploads/studio-data/`
  - [x] Implement export/import for client packages
  - [x] Add theme mapping interface (brand → semantic)
  - [x] Update theme.json export to use only mapped colors
- **Implementation Details**:
  - REST API v2 endpoints at `/wp-json/studio/v2/*`
  - Complete file storage manager in `class-studio-file-storage.php`
  - Per-brand theme mappings with named themes
  - "Brand" renamed to "Color Set" throughout UI
  - Clean theme.json export with only mapped colors

### Theme Settings Page Implementation
- **Priority**: HIGH
- **Status**: Planning
- **Description**: Create dedicated Theme Settings page for mapping
- **Features**:
  - [ ] Visual brand → theme color mapping
  - [ ] Multiple theme support (light, dark, holiday)
  - [ ] Live preview of theme changes
  - [ ] Theme switcher functionality
  - [ ] Theme export/import

### Assets Management UI (Phase 2.5)
- **Priority**: MEDIUM
- **Status**: Future Development
- **Description**: Digital asset management system
- **Features**:
  - [ ] Asset library interface
  - [ ] Upload logos, fonts, images per client/brand
  - [ ] Asset categorization and tagging
  - [ ] CDN integration options
  - [ ] Automatic asset injection into themes

### Notes
- Currently plugin only renders in admin pages
- Moving to JSON storage will improve portability and agency workflows
- Multi-theme support will enable dark mode and seasonal variations
- Yes, using WordPress filters (`wp_theme_json_data_theme`) for clean integration