# CLAUDE SESSION MEMORY - WP Studio Vibes

**Date Created**: June 29, 2025  
**Current Project**: WP Studio Vibes - Fresh Start Implementation  
**Location**: `/Users/shannamiddleton/Local Drive Mac/mi agency/miProjects/wp-studio-vibes`  
**Current Phase**: Initial Project Setup

---

## 🎯 **PROJECT OVERVIEW**

### **WP Studio Vibes: Fresh Start Implementation**
This is a **brand new WordPress project** for developing The Studio Design System plugin. This is separate from the original "the-studio" project and represents a clean foundation for Studio plugin development.

### **Key Project Details**
- **WordPress Site**: Local development environment with complete WordPress installation
- **Plugin Development**: Will contain The Studio plugin when installed
- **Git Repository**: Local-only repository for backing up both the WordPress site and plugin
- **Documentation**: Comprehensive docs structure for development guidance

---

## 🏗️ **CURRENT PROJECT STRUCTURE**

### **WP Studio Vibes Structure**
```
wp-studio-vibes/
├── .git/                          # Local git repository
├── .gitignore                     # WordPress-specific gitignore
├── DOCS/                          # Project documentation
│   ├── CLAUDE.md                  # This memory file
│   ├── HTML-MOCKUPS/              # HTML prototypes (planned)
│   ├── STUDIO-DOCS/               # Development documentation (planned)  
│   └── STUDIO-ASSETS/             # Design assets (planned)
├── app/                           # WordPress application
│   ├── public/                    # WordPress core files
│   │   ├── wp-content/
│   │   │   ├── themes/            # WordPress themes
│   │   │   └── plugins/           # WordPress plugins (Studio plugin will go here)
│   │   └── [wordpress core files]
│   └── sql/                       # Database files
├── conf/                          # Server configuration
└── logs/                          # Application logs
```

---

## 📋 **CURRENT TASKS**

### **✅ Completed**
- Set up local git repository for entire wp-studio-vibes project
- Created proper .gitignore for WordPress development
- Initialized DOCS folder structure

### **🔄 In Progress**
- Creating project documentation structure

### **📋 Next Steps**
1. Create custom WordPress theme with CAPS naming convention
2. Set up HTML mockup development environment
3. Create admin page mockups for Studio plugin interface
4. Install and develop The Studio plugin

---

## 🛠️ **DEVELOPMENT SETUP**

### **Git Repository**
- **Type**: Local repository only (no GitHub remote yet)
- **Purpose**: Backup both WordPress site and plugin development
- **Scope**: Entire wp-studio-vibes project including WordPress core, themes, plugins

### **WordPress Environment**
- **Location**: `/app/public/`
- **Type**: Local development WordPress installation
- **Plugins**: Will include The Studio plugin when developed
- **Themes**: Will include custom Studio admin theme

---

## 🎨 **PLANNED FEATURES**

### **Custom WordPress Theme**
- **Name**: Studio Plugin Admin (with CAPS naming convention)
- **Purpose**: Admin interface for Studio design system
- **Features**: Component editing, variable management, theme switching

### **HTML Mockups**
- **Location**: `/DOCS/HTML-MOCKUPS/`
- **Purpose**: Prototype interfaces before WordPress implementation
- **Features**: Studio branding, semantic CSS architecture

### **Studio Plugin**
- **Based on**: Original "the-studio" project architecture
- **Implementation**: Fresh start with lessons learned
- **Features**: Design system management, theme.json integration

---

## 📝 **ALWAYS DIRECTIVES**

### **File Management**
- **Always delete** files after consolidation/replacement
- **Always remove** unused code completely (don't comment out)
- **Always ask for approval** before creating new files or choosing file locations
- **Always maintain** clean codebase with single source of truth

### **Development Standards**
- **Always use** semantic CSS variables over generic scales
- **Always organize** CSS by component, not property type
- **Always follow** Studio brand guidelines (teal/green color system)
- **Always maintain** proper git commit practices

---

## 🔗 **RELATIONSHIP TO ORIGINAL PROJECT**

### **Historical Context**
- **Original Location**: `/Users/shannamiddleton/Local Drive Mac/mi agency/miProjects/the-studio`
- **Relationship**: WP Studio Vibes is a fresh start, not a continuation
- **Lessons Applied**: Architecture patterns, design system concepts, WordPress integration strategies

### **Key Differences**
- **Fresh WordPress Install**: Clean environment without legacy code
- **Focused Scope**: Plugin development within WordPress context
- **Local Repository**: Project-specific git repo, not connected to original

---

**🚀 Status**: Project initialized, ready for development. Next step is creating custom theme and HTML mockups.

---

*Last Updated: June 29, 2025*  
*Current Focus: Project initialization and structure setup*  
*Next Phase: Custom theme creation and mockup development*