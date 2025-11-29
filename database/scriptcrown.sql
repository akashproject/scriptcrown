ALTER TABLE `technologies` ADD `faqs` TEXT NULL DEFAULT NULL AFTER `featured_image`;
ALTER TABLE `projects` ADD `faqs` TEXT NULL DEFAULT NULL AFTER `featured_image`;
ALTER TABLE `services` ADD `faqs` TEXT NULL DEFAULT NULL AFTER `featured_image`;
ALTER TABLE `businesses` ADD `faqs` TEXT NULL DEFAULT NULL AFTER `featured_image`;