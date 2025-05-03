-- First, as mysql user root, SET GLOBAL event_scheduler=ON;

-- To be sourced into your robust database

CREATE OR REPLACE EVENT `purge_group_notices`
ON SCHEDULE
  EVERY 1 DAY
  COMMENT 'Purges group notices older than 14 days'
  DO
    DELETE FROM os_groups_notices WHERE TMStamp < UNIX_TIMESTAMP()-1209600;
