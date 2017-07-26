CREATE TABLE IF NOT EXISTS hrterstservice.event
(
id Int64,
created_at Date
country String,
type Enum8('view' = 1, 'play' = 2, 'click' = 3),
count Int64,
) ENGINE = MergeTree(created_at, (id, created_at), 8192);
