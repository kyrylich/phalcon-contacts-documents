
CREATE TABLE contacts
(
    id         SERIAL PRIMARY KEY NOT NULL,
    first_name VARCHAR(255)    NOT NULL,
    last_name  VARCHAR(255)    NOT NULL,
    is_deleted BOOL            NOT NULL,
    created_at timestamp       NOT NULL
);

CREATE TABLE documents
(
    id         SERIAL PRIMARY KEY NOT NULL,
    number     VARCHAR(255)    NOT NULL,
    is_deleted BOOL            NOT NULL,
    created_at timestamp       NOT NULL,
    contact_id INT             NOT NULL REFERENCES contacts(id)
);


