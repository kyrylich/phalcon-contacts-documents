INSERT INTO custom_fields (name, type) VALUES
('field_string', 'string'),
('field_date', 'date'),
('field_select', 'select'),
('field_multi_select', 'multi_select');

INSERT INTO custom_field_data_set (custom_field_id, data_set) VALUES
(3, '[1, 2, 3, 4]'), (4 ,'[1, 2, 3, 4]');

INSERT INTO contacts_custom_fields (custom_field_id, contact_id, data) VALUES
(1, 1, '"FIELD_STRING_DATA"'),
(2, 1, '"2022-01-01"'),
(3, 1, '1'),
(4, 1, '[1, 2]'),
(1, 2, '"FIELD_STRING_DATA"'),
(2, 2, '"2022-01-12"'),
(3, 2, '1'),
(4, 2, '[3, 4]');
