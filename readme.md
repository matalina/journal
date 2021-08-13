# Journal App

**Goal:** A bullet journal with google calendar integration, mardown notes, useful bookmarks, habit trackers, task list with a pomodoro technique

## Step 1: Basic Bullet Journal

-   [ ] Index
-   [ ] Future Log
-   [ ] Month at a Glance
-   [ ] Week at a Glance
-   [ ] Daily
-   [ ] Migrations

### Backend Testable Steps

-   [x] Add Bullet
-   [x] Get Types
-   [x] View Bullet List
-   [ ] Edit Content of Bullet
-   [ ] Complete Task
-   [ ] Cancel Task/Event
-   [ ] Migrate Bullet to Future Log
-   [ ] Migrate Bullet to Collection

**Bullet Notations:**

```
<i class="far fa-square"></i> Task
<i class="far fa-calendar"></i> Event
<i class="far fa-sticky-note"></i> Note
<i class="fas fa-times"></i> Complete
<i class="fas fa-arrow-left"></i> Migrated to Future Log
<i class="fas fa-arrow-right"></i> Migrated to Tommorrow
<i class="fas fa-star"></i> Priority
<i class="fas fa-exclamation"></i> Inspiration
```

**Database Tables**

bullets

-   id
-   type_id
-   signifier
-   content
-   date

types

-   id
-   type
-   icon
-   prefix
-   suffix
-   is_signifier
