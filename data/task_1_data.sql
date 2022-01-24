INSERT INTO contacts (first_name, last_name, is_deleted, created_at) VALUES ('JohnTest', 'Doe', false, to_timestamp('2022-12-12 15:24:30', 'YYYY-MM-DD HH24:MI:SS'));
INSERT INTO contacts (first_name, last_name, is_deleted, created_at) VALUES
(concat('John',  currval(pg_get_serial_sequence('contacts', 'id'))), 'Doe', false, to_timestamp('2022-12-10 15:24:30', 'YYYY-MM-DD HH24:MI:SS')),
(concat('John',  currval(pg_get_serial_sequence('contacts', 'id'))), 'Doe', false, to_timestamp('2022-12-12 15:24:31', 'YYYY-MM-DD HH24:MI:SS')),
(concat('John',  currval(pg_get_serial_sequence('contacts', 'id'))), 'Doe', true, to_timestamp('2022-12-12 15:24:32', 'YYYY-MM-DD HH24:MI:SS')),
(concat('John',  currval(pg_get_serial_sequence('contacts', 'id'))), 'Malik', false, to_timestamp('2022-12-20 15:24:33', 'YYYY-MM-DD HH24:MI:SS')),
(concat('John',  currval(pg_get_serial_sequence('contacts', 'id'))), 'Doe', true, to_timestamp('2022-12-12 15:24:34', 'YYYY-MM-DD HH24:MI:SS')),
(concat('John',  currval(pg_get_serial_sequence('contacts', 'id'))), 'Doe', false, to_timestamp('2022-12-21 15:24:35', 'YYYY-MM-DD HH24:MI:SS')),
(concat('John',  currval(pg_get_serial_sequence('contacts', 'id'))), 'Doe', true, to_timestamp('2022-12-12 15:24:36', 'YYYY-MM-DD HH24:MI:SS')),
(concat('Malik',  currval(pg_get_serial_sequence('contacts', 'id'))), 'Doe', false, to_timestamp('2022-12-12 15:24:37', 'YYYY-MM-DD HH24:MI:SS'));


INSERT INTO documents ("number", is_deleted, created_at, contact_id) VALUES ('UA#NUMBER!', false, to_timestamp('2022-12-12 15:24:30', 'YYYY-MM-DD HH24:MI:SS'), 1);
INSERT INTO documents ("number", is_deleted, created_at, contact_id) VALUES
    (concat('UA#NUMBER', currval(pg_get_serial_sequence('documents', 'id'))), false, to_timestamp('2022-12-12 15:24:31', 'YYYY-MM-DD HH24:MI:SS'), 2),
    (concat('UA#NUMBER', currval(pg_get_serial_sequence('documents', 'id'))), false, to_timestamp('2022-12-12 15:24:32', 'YYYY-MM-DD HH24:MI:SS'), 2),
    (concat('UA#NUMBER', currval(pg_get_serial_sequence('documents', 'id'))), false, to_timestamp('2022-12-12 15:24:33', 'YYYY-MM-DD HH24:MI:SS'), 2),
    (concat('UA#NUMBER', currval(pg_get_serial_sequence('documents', 'id'))), false, to_timestamp('2022-12-12 15:24:34', 'YYYY-MM-DD HH24:MI:SS'), 3),
    (concat('UA#NUMBER', currval(pg_get_serial_sequence('documents', 'id'))), false, to_timestamp('2022-12-12 15:24:35', 'YYYY-MM-DD HH24:MI:SS'), 4),
    (concat('UA#NUMBER', currval(pg_get_serial_sequence('documents', 'id'))), false, to_timestamp('2022-12-12 15:24:36', 'YYYY-MM-DD HH24:MI:SS'), 4),
    (concat('UA#NUMBER', currval(pg_get_serial_sequence('documents', 'id'))), false, to_timestamp('2022-12-12 15:24:37', 'YYYY-MM-DD HH24:MI:SS'), 4),
    (concat('UA#NUMBER', currval(pg_get_serial_sequence('documents', 'id'))), false, to_timestamp('2022-12-12 15:24:38', 'YYYY-MM-DD HH24:MI:SS'), 5),
    (concat('UA#NUMBER', currval(pg_get_serial_sequence('documents', 'id'))), false, to_timestamp('2022-12-12 15:24:39', 'YYYY-MM-DD HH24:MI:SS'), 6);
