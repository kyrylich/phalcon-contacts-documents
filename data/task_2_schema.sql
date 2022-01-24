CREATE TABLE custom_fields
(
    id   SERIAL PRIMARY KEY  NOT NULL,
    name VARCHAR(255) UNIQUE NOT NULL,
    type VARCHAR(255)        NOT NULL
);

CREATE TABLE custom_field_data_set
(
    id              SERIAL PRIMARY KEY NOT NULL,
    custom_field_id INT                NOT NULL,
    data_set        JSON               NOT NULL
);

ALTER TABLE custom_field_data_set
    ADD CONSTRAINT FK_custom_field_data_set_custom_field_id FOREIGN KEY (custom_field_id) REFERENCES custom_fields (id);

CREATE TABLE contacts_custom_fields
(
    id              SERIAL PRIMARY KEY NOT NULL,
    custom_field_id INT                NOT NULL,
    contact_id      INT                NOT NULL,
    data            JSON               NOT NULL
);

ALTER TABLE contacts_custom_fields
    ADD CONSTRAINT FK_contacts_custom_fields_custom_field_id FOREIGN KEY (custom_field_id) REFERENCES custom_fields (id);

ALTER TABLE contacts_custom_fields
    ADD CONSTRAINT FK_contacts_custom_fields_contact_id FOREIGN KEY (contact_id) REFERENCES contacts (id);
