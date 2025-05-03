-- Purge all search entries related to a permanently deleted region

-- Prerequisites: OpenSimSearch, lickx branch
--                https://github.com/lickx/OpenSimSearch/tree/lickx

-- To be sourced into your robust database.

-- Usage example: CALL sp_searchpurge('2ef309ab-dc66-4123-85e8-873d00b8acc9');

DELIMITER //
CREATE OR REPLACE PROCEDURE sp_searchpurge (IN pRegionID CHAR(36))
BEGIN
    -- classifieds (note, classifieds is the only table that isn't prefixed with search_ because Robust expects and queries it under this name)
    DELETE classifieds FROM classifieds INNER JOIN search_parcels ON classifieds.parceluuid = search_parcels.parcelUUID WHERE search_parcels.regionUUID=pRegionID;

    -- events
    DELETE search_events FROM search_events INNER JOIN search_parcels ON search_events.parcelUUID COLLATE utf8_unicode_ci = search_parcels.parcelUUID WHERE search_parcels.regionUUID=pRegionID;

    -- objects
    DELETE FROM search_objects WHERE regionuuid=pRegionID;

    -- regionsales
    DELETE FROM search_parcelsales WHERE regionUUID=pRegionID;

    -- popularplaces
    DELETE search_popularplaces FROM search_popularplaces INNER JOIN search_parcels ON search_popularplaces.parcelUUID = search_parcels.parcelUUID WHERE search_parcels.regionUUID=pRegionID;

    -- allparcels
    DELETE FROM search_allparcels WHERE regionUUID=pRegionID;

    -- parcels
    DELETE FROM search_parcels WHERE regionUUID=pRegionID;

    -- regions
    DELETE FROM search_regions WHERE regionUUID=pRegionID;
END //
DELIMITER ;
