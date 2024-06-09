---
title: API Reference

language_tabs:
- bash
- javascript

includes:

search: true

toc_footers:
- <a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a>
---
<!-- START_INFO -->
# Info

Welcome to the generated API reference.
[Get Postman Collection](http://almosque.loc/docs/collection.json)

<!-- END_INFO -->

#Category


<!-- START_fe5531af46ff26bddde964cac96f6dcf -->
## Category Get all

> Example request:

```bash
curl -X GET \
    -G "http://almosque.loc/api/v1/admin/categories" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://almosque.loc/api/v1/admin/categories"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "id": "bigint",
    "title_uz": "string",
    "title_ru": "string",
    "title_en": "string",
    "created_at": "datetime",
    "updated_at": "datetime",
    "roles": [
        "admin"
    ]
}
```

### HTTP Request
`GET api/v1/admin/categories`


<!-- END_fe5531af46ff26bddde964cac96f6dcf -->

<!-- START_30535ceeeaeaf82d7c418c31191ebe64 -->
## Category create

> Example request:

```bash
curl -X POST \
    "http://almosque.loc/api/v1/admin/categories" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"id":"perferendis","title_uz":"praesentium","title_ru":"et","title_en":"asperiores","created_at":"aut","updated_at":"eaque"}'

```

```javascript
const url = new URL(
    "http://almosque.loc/api/v1/admin/categories"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "id": "perferendis",
    "title_uz": "praesentium",
    "title_ru": "et",
    "title_en": "asperiores",
    "created_at": "aut",
    "updated_at": "eaque"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/admin/categories`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `id` | bigint |  optional  | no-required id
        `title_uz` | string |  optional  | no-required title_uz
        `title_ru` | string |  optional  | no-required title_ru
        `title_en` | string |  optional  | no-required title_en
        `created_at` | datetime |  optional  | no-required created_at
        `updated_at` | datetime |  optional  | no-required updated_at
    
<!-- END_30535ceeeaeaf82d7c418c31191ebe64 -->

<!-- START_37eab64454c255ea07b6b2b4da0e21a3 -->
## Category update

> Example request:

```bash
curl -X PUT \
    "http://almosque.loc/api/v1/admin/categories/1?id=laboriosam" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"id":"aut","title_uz":"illum","title_ru":"soluta","title_en":"quas","created_at":"impedit","updated_at":"ea"}'

```

```javascript
const url = new URL(
    "http://almosque.loc/api/v1/admin/categories/1"
);

let params = {
    "id": "laboriosam",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "id": "aut",
    "title_uz": "illum",
    "title_ru": "soluta",
    "title_en": "quas",
    "created_at": "impedit",
    "updated_at": "ea"
}

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/v1/admin/categories/{id}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `id` |  required  | ID
#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `id` | bigint |  optional  | no-required id
        `title_uz` | string |  optional  | no-required title_uz
        `title_ru` | string |  optional  | no-required title_ru
        `title_en` | string |  optional  | no-required title_en
        `created_at` | datetime |  optional  | no-required created_at
        `updated_at` | datetime |  optional  | no-required updated_at
    
<!-- END_37eab64454c255ea07b6b2b4da0e21a3 -->

<!-- START_742ce8859defc2ea3e424ee4ac88bc5b -->
## Category view

> Example request:

```bash
curl -X GET \
    -G "http://almosque.loc/api/v1/admin/categories/1?id=dolor" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://almosque.loc/api/v1/admin/categories/1"
);

let params = {
    "id": "dolor",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "id": "bigint",
    "title_uz": "string",
    "title_ru": "string",
    "title_en": "string",
    "created_at": "datetime",
    "updated_at": "datetime",
    "roles": [
        "all"
    ]
}
```

### HTTP Request
`GET api/v1/admin/categories/{id}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `id` |  required  | ID

<!-- END_742ce8859defc2ea3e424ee4ac88bc5b -->

<!-- START_f80729c1801be0add679365e1782fc3d -->
## Category delete

> Example request:

```bash
curl -X DELETE \
    "http://almosque.loc/api/v1/admin/categories/1?id=quas" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://almosque.loc/api/v1/admin/categories/1"
);

let params = {
    "id": "quas",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/v1/admin/categories/{id}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `id` |  required  | ID

<!-- END_f80729c1801be0add679365e1782fc3d -->

<!-- START_80420c095ed96da032c9eb419d7d6e2d -->
## Category Get all

> Example request:

```bash
curl -X GET \
    -G "http://almosque.loc/api/v1/categories" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://almosque.loc/api/v1/categories"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "id": "bigint",
    "title_uz": "string",
    "title_ru": "string",
    "title_en": "string",
    "created_at": "datetime",
    "updated_at": "datetime",
    "roles": [
        "admin"
    ]
}
```

### HTTP Request
`GET api/v1/categories`


<!-- END_80420c095ed96da032c9eb419d7d6e2d -->

<!-- START_1402ab8abac97e9e61e52a840a1d6700 -->
## Category view

> Example request:

```bash
curl -X GET \
    -G "http://almosque.loc/api/v1/categories/1?id=delectus" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://almosque.loc/api/v1/categories/1"
);

let params = {
    "id": "delectus",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "id": "bigint",
    "title_uz": "string",
    "title_ru": "string",
    "title_en": "string",
    "created_at": "datetime",
    "updated_at": "datetime",
    "roles": [
        "all"
    ]
}
```

### HTTP Request
`GET api/v1/categories/{id}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `id` |  required  | ID

<!-- END_1402ab8abac97e9e61e52a840a1d6700 -->

#Contacts


<!-- START_e630191e56ab8499a29d61f642dd1549 -->
## Contacts Get all

> Example request:

```bash
curl -X GET \
    -G "http://almosque.loc/api/v1/admin/contacts" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://almosque.loc/api/v1/admin/contacts"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "id": "bigint",
    "name": "string",
    "phone": "string",
    "email": "string",
    "description": "text",
    "created_at": "datetime",
    "updated_at": "datetime",
    "roles": [
        "admin"
    ]
}
```

### HTTP Request
`GET api/v1/admin/contacts`


<!-- END_e630191e56ab8499a29d61f642dd1549 -->

<!-- START_81be434b1457439b9c6837e0f3088cf6 -->
## Contacts create

> Example request:

```bash
curl -X POST \
    "http://almosque.loc/api/v1/admin/contacts" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"id":"illo","name":"mollitia","phone":"et","email":"laudantium","description":"sed","created_at":"sunt","updated_at":"vel"}'

```

```javascript
const url = new URL(
    "http://almosque.loc/api/v1/admin/contacts"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "id": "illo",
    "name": "mollitia",
    "phone": "et",
    "email": "laudantium",
    "description": "sed",
    "created_at": "sunt",
    "updated_at": "vel"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/admin/contacts`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `id` | bigint |  optional  | no-required id
        `name` | string |  optional  | no-required name
        `phone` | string |  optional  | no-required phone
        `email` | string |  optional  | no-required email
        `description` | text |  optional  | no-required description
        `created_at` | datetime |  optional  | no-required created_at
        `updated_at` | datetime |  optional  | no-required updated_at
    
<!-- END_81be434b1457439b9c6837e0f3088cf6 -->

<!-- START_96661f2aaf350f767ecf244d1ac04bb5 -->
## Contacts update

> Example request:

```bash
curl -X PUT \
    "http://almosque.loc/api/v1/admin/contacts/1?id=amet" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"id":"dolorem","name":"maxime","phone":"non","email":"quis","description":"dolores","created_at":"reprehenderit","updated_at":"voluptatem"}'

```

```javascript
const url = new URL(
    "http://almosque.loc/api/v1/admin/contacts/1"
);

let params = {
    "id": "amet",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "id": "dolorem",
    "name": "maxime",
    "phone": "non",
    "email": "quis",
    "description": "dolores",
    "created_at": "reprehenderit",
    "updated_at": "voluptatem"
}

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/v1/admin/contacts/{id}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `id` |  required  | ID
#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `id` | bigint |  optional  | no-required id
        `name` | string |  optional  | no-required name
        `phone` | string |  optional  | no-required phone
        `email` | string |  optional  | no-required email
        `description` | text |  optional  | no-required description
        `created_at` | datetime |  optional  | no-required created_at
        `updated_at` | datetime |  optional  | no-required updated_at
    
<!-- END_96661f2aaf350f767ecf244d1ac04bb5 -->

<!-- START_2a72e8b0211ddc27d6c013e824e1ccba -->
## Contacts view

> Example request:

```bash
curl -X GET \
    -G "http://almosque.loc/api/v1/admin/contacts/1?id=sint" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://almosque.loc/api/v1/admin/contacts/1"
);

let params = {
    "id": "sint",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "id": "bigint",
    "name": "string",
    "phone": "string",
    "email": "string",
    "description": "text",
    "created_at": "datetime",
    "updated_at": "datetime",
    "roles": [
        "all"
    ]
}
```

### HTTP Request
`GET api/v1/admin/contacts/{id}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `id` |  required  | ID

<!-- END_2a72e8b0211ddc27d6c013e824e1ccba -->

<!-- START_e52a03ac3b93f47ecf71eae73b90c351 -->
## Contacts delete

> Example request:

```bash
curl -X DELETE \
    "http://almosque.loc/api/v1/admin/contacts/1?id=exercitationem" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://almosque.loc/api/v1/admin/contacts/1"
);

let params = {
    "id": "exercitationem",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/v1/admin/contacts/{id}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `id` |  required  | ID

<!-- END_e52a03ac3b93f47ecf71eae73b90c351 -->

<!-- START_2320936f7c7a29fe1b1faf0be6fee8ef -->
## Contacts Get all

> Example request:

```bash
curl -X GET \
    -G "http://almosque.loc/api/v1/contacts" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://almosque.loc/api/v1/contacts"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "id": "bigint",
    "name": "string",
    "phone": "string",
    "email": "string",
    "description": "text",
    "created_at": "datetime",
    "updated_at": "datetime",
    "roles": [
        "admin"
    ]
}
```

### HTTP Request
`GET api/v1/contacts`


<!-- END_2320936f7c7a29fe1b1faf0be6fee8ef -->

<!-- START_2554093709293f146112d09a74e7f693 -->
## Contacts view

> Example request:

```bash
curl -X GET \
    -G "http://almosque.loc/api/v1/contacts/1?id=officiis" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://almosque.loc/api/v1/contacts/1"
);

let params = {
    "id": "officiis",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "id": "bigint",
    "name": "string",
    "phone": "string",
    "email": "string",
    "description": "text",
    "created_at": "datetime",
    "updated_at": "datetime",
    "roles": [
        "all"
    ]
}
```

### HTTP Request
`GET api/v1/contacts/{id}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `id` |  required  | ID

<!-- END_2554093709293f146112d09a74e7f693 -->

#Country


<!-- START_4b2e833d3c851438d7cf578553537caa -->
## Country Get all

> Example request:

```bash
curl -X GET \
    -G "http://almosque.loc/api/v1/admin/countries" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://almosque.loc/api/v1/admin/countries"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "id": "bigint",
    "name": "string",
    "name_uz": "string",
    "name_ru": "string",
    "name_en": "string",
    "code": "string",
    "status": "integer",
    "is_deleted": "integer",
    "deleted_at": "datetime",
    "created_at": "datetime",
    "updated_at": "datetime",
    "roles": [
        "admin"
    ]
}
```

### HTTP Request
`GET api/v1/admin/countries`


<!-- END_4b2e833d3c851438d7cf578553537caa -->

<!-- START_8c571e5bfd1d0cceabe74eb96f8af9c8 -->
## Country create

> Example request:

```bash
curl -X POST \
    "http://almosque.loc/api/v1/admin/countries" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"id":"architecto","name":"aut","name_uz":"commodi","name_ru":"sit","name_en":"aut","code":"accusantium","status":10,"is_deleted":10,"deleted_at":"ratione","created_at":"earum","updated_at":"animi"}'

```

```javascript
const url = new URL(
    "http://almosque.loc/api/v1/admin/countries"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "id": "architecto",
    "name": "aut",
    "name_uz": "commodi",
    "name_ru": "sit",
    "name_en": "aut",
    "code": "accusantium",
    "status": 10,
    "is_deleted": 10,
    "deleted_at": "ratione",
    "created_at": "earum",
    "updated_at": "animi"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/admin/countries`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `id` | bigint |  optional  | no-required id
        `name` | string |  optional  | no-required name
        `name_uz` | string |  optional  | no-required name_uz
        `name_ru` | string |  optional  | no-required name_ru
        `name_en` | string |  optional  | no-required name_en
        `code` | string |  optional  | no-required code
        `status` | integer |  optional  | no-required status
        `is_deleted` | integer |  optional  | no-required is_deleted
        `deleted_at` | datetime |  optional  | no-required deleted_at
        `created_at` | datetime |  optional  | no-required created_at
        `updated_at` | datetime |  optional  | no-required updated_at
    
<!-- END_8c571e5bfd1d0cceabe74eb96f8af9c8 -->

<!-- START_2c0b58eda7645380e5a5807a989beb3e -->
## Country update

> Example request:

```bash
curl -X PUT \
    "http://almosque.loc/api/v1/admin/countries/1?id=quia" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"id":"repellat","name":"autem","name_uz":"autem","name_ru":"nisi","name_en":"non","code":"fuga","status":18,"is_deleted":6,"deleted_at":"aut","created_at":"error","updated_at":"neque"}'

```

```javascript
const url = new URL(
    "http://almosque.loc/api/v1/admin/countries/1"
);

let params = {
    "id": "quia",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "id": "repellat",
    "name": "autem",
    "name_uz": "autem",
    "name_ru": "nisi",
    "name_en": "non",
    "code": "fuga",
    "status": 18,
    "is_deleted": 6,
    "deleted_at": "aut",
    "created_at": "error",
    "updated_at": "neque"
}

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/v1/admin/countries/{id}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `id` |  required  | ID
#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `id` | bigint |  optional  | no-required id
        `name` | string |  optional  | no-required name
        `name_uz` | string |  optional  | no-required name_uz
        `name_ru` | string |  optional  | no-required name_ru
        `name_en` | string |  optional  | no-required name_en
        `code` | string |  optional  | no-required code
        `status` | integer |  optional  | no-required status
        `is_deleted` | integer |  optional  | no-required is_deleted
        `deleted_at` | datetime |  optional  | no-required deleted_at
        `created_at` | datetime |  optional  | no-required created_at
        `updated_at` | datetime |  optional  | no-required updated_at
    
<!-- END_2c0b58eda7645380e5a5807a989beb3e -->

<!-- START_e2167050b17e1e4f24d97e3796853957 -->
## api/v1/admin/countries/{id}
> Example request:

```bash
curl -X GET \
    -G "http://almosque.loc/api/v1/admin/countries/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://almosque.loc/api/v1/admin/countries/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/v1/admin/countries/{id}`


<!-- END_e2167050b17e1e4f24d97e3796853957 -->

<!-- START_6794fd0c3798ed63c279a895d24e3ab4 -->
## Country delete

> Example request:

```bash
curl -X DELETE \
    "http://almosque.loc/api/v1/admin/countries/1?id=sed" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://almosque.loc/api/v1/admin/countries/1"
);

let params = {
    "id": "sed",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/v1/admin/countries/{id}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `id` |  required  | ID

<!-- END_6794fd0c3798ed63c279a895d24e3ab4 -->

<!-- START_7a483081849344aa9cc1a1ce81ed9c3f -->
## Country Get all

> Example request:

```bash
curl -X GET \
    -G "http://almosque.loc/api/v1/countries" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://almosque.loc/api/v1/countries"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "id": "bigint",
    "name": "string",
    "name_uz": "string",
    "name_ru": "string",
    "name_en": "string",
    "code": "string",
    "status": "integer",
    "is_deleted": "integer",
    "deleted_at": "datetime",
    "created_at": "datetime",
    "updated_at": "datetime",
    "roles": [
        "admin"
    ]
}
```

### HTTP Request
`GET api/v1/countries`


<!-- END_7a483081849344aa9cc1a1ce81ed9c3f -->

<!-- START_14c9b8e238a5a9052ded872035df214d -->
## api/v1/countries/{id}
> Example request:

```bash
curl -X GET \
    -G "http://almosque.loc/api/v1/countries/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://almosque.loc/api/v1/countries/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (404):

```json
{
    "message": "No query results for model [App\\Models\\Country] 1"
}
```

### HTTP Request
`GET api/v1/countries/{id}`


<!-- END_14c9b8e238a5a9052ded872035df214d -->

#District


<!-- START_e062462101937432ebfdfc7fe8480265 -->
## District Get all

> Example request:

```bash
curl -X GET \
    -G "http://almosque.loc/api/v1/admin/district" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://almosque.loc/api/v1/admin/district"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "id": "bigint",
    "name": "string",
    "name_uz": "string",
    "name_ru": "string",
    "name_en": "string",
    "code": "string",
    "region_id": "integer",
    "status": "integer",
    "is_deleted": "integer",
    "deleted_at": "datetime",
    "created_at": "datetime",
    "updated_at": "datetime",
    "roles": [
        "admin"
    ]
}
```

### HTTP Request
`GET api/v1/admin/district`


<!-- END_e062462101937432ebfdfc7fe8480265 -->

<!-- START_51c31537362ce9a61dcc70d8e9bf18fd -->
## District create

> Example request:

```bash
curl -X POST \
    "http://almosque.loc/api/v1/admin/district" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"id":"velit","name":"numquam","name_uz":"voluptas","name_ru":"odit","name_en":"eum","code":"enim","region_id":15,"status":18,"is_deleted":19,"deleted_at":"explicabo","created_at":"voluptatem","updated_at":"reiciendis"}'

```

```javascript
const url = new URL(
    "http://almosque.loc/api/v1/admin/district"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "id": "velit",
    "name": "numquam",
    "name_uz": "voluptas",
    "name_ru": "odit",
    "name_en": "eum",
    "code": "enim",
    "region_id": 15,
    "status": 18,
    "is_deleted": 19,
    "deleted_at": "explicabo",
    "created_at": "voluptatem",
    "updated_at": "reiciendis"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/admin/district`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `id` | bigint |  optional  | no-required id
        `name` | string |  optional  | no-required name
        `name_uz` | string |  optional  | no-required name_uz
        `name_ru` | string |  optional  | no-required name_ru
        `name_en` | string |  optional  | no-required name_en
        `code` | string |  optional  | no-required code
        `region_id` | integer |  optional  | no-required region_id
        `status` | integer |  optional  | no-required status
        `is_deleted` | integer |  optional  | no-required is_deleted
        `deleted_at` | datetime |  optional  | no-required deleted_at
        `created_at` | datetime |  optional  | no-required created_at
        `updated_at` | datetime |  optional  | no-required updated_at
    
<!-- END_51c31537362ce9a61dcc70d8e9bf18fd -->

<!-- START_b321eef73006470e50c2bf1c814859cd -->
## District update

> Example request:

```bash
curl -X PUT \
    "http://almosque.loc/api/v1/admin/district/1?id=eos" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"id":"officiis","name":"aut","name_uz":"modi","name_ru":"ut","name_en":"error","code":"modi","region_id":9,"status":1,"is_deleted":8,"deleted_at":"consequatur","created_at":"minus","updated_at":"incidunt"}'

```

```javascript
const url = new URL(
    "http://almosque.loc/api/v1/admin/district/1"
);

let params = {
    "id": "eos",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "id": "officiis",
    "name": "aut",
    "name_uz": "modi",
    "name_ru": "ut",
    "name_en": "error",
    "code": "modi",
    "region_id": 9,
    "status": 1,
    "is_deleted": 8,
    "deleted_at": "consequatur",
    "created_at": "minus",
    "updated_at": "incidunt"
}

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/v1/admin/district/{id}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `id` |  required  | ID
#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `id` | bigint |  optional  | no-required id
        `name` | string |  optional  | no-required name
        `name_uz` | string |  optional  | no-required name_uz
        `name_ru` | string |  optional  | no-required name_ru
        `name_en` | string |  optional  | no-required name_en
        `code` | string |  optional  | no-required code
        `region_id` | integer |  optional  | no-required region_id
        `status` | integer |  optional  | no-required status
        `is_deleted` | integer |  optional  | no-required is_deleted
        `deleted_at` | datetime |  optional  | no-required deleted_at
        `created_at` | datetime |  optional  | no-required created_at
        `updated_at` | datetime |  optional  | no-required updated_at
    
<!-- END_b321eef73006470e50c2bf1c814859cd -->

<!-- START_1483fce5be40bb195f26470deb4ec137 -->
## api/v1/admin/district/{id}
> Example request:

```bash
curl -X GET \
    -G "http://almosque.loc/api/v1/admin/district/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://almosque.loc/api/v1/admin/district/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/v1/admin/district/{id}`


<!-- END_1483fce5be40bb195f26470deb4ec137 -->

<!-- START_5b4f6bc8bd064813611916a2391c3e08 -->
## District delete

> Example request:

```bash
curl -X DELETE \
    "http://almosque.loc/api/v1/admin/district/1?id=exercitationem" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://almosque.loc/api/v1/admin/district/1"
);

let params = {
    "id": "exercitationem",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/v1/admin/district/{id}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `id` |  required  | ID

<!-- END_5b4f6bc8bd064813611916a2391c3e08 -->

<!-- START_7e48f1cc898ed67c531e6b44d9307c14 -->
## District Get all

> Example request:

```bash
curl -X GET \
    -G "http://almosque.loc/api/v1/district" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://almosque.loc/api/v1/district"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "id": "bigint",
    "name": "string",
    "name_uz": "string",
    "name_ru": "string",
    "name_en": "string",
    "code": "string",
    "region_id": "integer",
    "status": "integer",
    "is_deleted": "integer",
    "deleted_at": "datetime",
    "created_at": "datetime",
    "updated_at": "datetime",
    "roles": [
        "admin"
    ]
}
```

### HTTP Request
`GET api/v1/district`


<!-- END_7e48f1cc898ed67c531e6b44d9307c14 -->

<!-- START_ede10abfbc2a0aa41c2036838fb26a4a -->
## api/v1/district/{id}
> Example request:

```bash
curl -X GET \
    -G "http://almosque.loc/api/v1/district/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://almosque.loc/api/v1/district/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (404):

```json
{
    "message": "No query results for model [App\\Models\\District] 1"
}
```

### HTTP Request
`GET api/v1/district/{id}`


<!-- END_ede10abfbc2a0aa41c2036838fb26a4a -->

#Feedback


<!-- START_3887bd049862c5d19381750fbbca11a8 -->
## Feedback Get all

> Example request:

```bash
curl -X GET \
    -G "http://almosque.loc/api/v1/admin/feedback" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://almosque.loc/api/v1/admin/feedback"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "id": "bigint",
    "name": "string",
    "email": "string",
    "phone": "string",
    "files": "string",
    "type": "integer",
    "object_id": "integer",
    "region_id": "integer",
    "district_id": "integer",
    "address": "string",
    "text": "text",
    "status": "integer",
    "is_deleted": "integer",
    "deleted_at": "datetime",
    "created_at": "datetime",
    "updated_at": "datetime",
    "roles": [
        "admin"
    ]
}
```

### HTTP Request
`GET api/v1/admin/feedback`


<!-- END_3887bd049862c5d19381750fbbca11a8 -->

<!-- START_36688fecafb90eabc00f6d05c49debcb -->
## Feedback create

> Example request:

```bash
curl -X POST \
    "http://almosque.loc/api/v1/admin/feedback" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"id":"eos","name":"eligendi","email":"autem","phone":"provident","files":"explicabo","type":10,"object_id":6,"region_id":17,"district_id":8,"address":"sunt","text":"quas","status":10,"is_deleted":6,"deleted_at":"libero","created_at":"consequatur","updated_at":"est"}'

```

```javascript
const url = new URL(
    "http://almosque.loc/api/v1/admin/feedback"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "id": "eos",
    "name": "eligendi",
    "email": "autem",
    "phone": "provident",
    "files": "explicabo",
    "type": 10,
    "object_id": 6,
    "region_id": 17,
    "district_id": 8,
    "address": "sunt",
    "text": "quas",
    "status": 10,
    "is_deleted": 6,
    "deleted_at": "libero",
    "created_at": "consequatur",
    "updated_at": "est"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/admin/feedback`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `id` | bigint |  optional  | no-required id
        `name` | string |  optional  | no-required name
        `email` | string |  optional  | no-required email
        `phone` | string |  optional  | no-required phone
        `files` | string |  optional  | no-required files
        `type` | integer |  optional  | no-required type
        `object_id` | integer |  optional  | no-required object_id
        `region_id` | integer |  optional  | no-required region_id
        `district_id` | integer |  optional  | no-required district_id
        `address` | string |  optional  | no-required address
        `text` | text |  optional  | no-required text
        `status` | integer |  optional  | no-required status
        `is_deleted` | integer |  optional  | no-required is_deleted
        `deleted_at` | datetime |  optional  | no-required deleted_at
        `created_at` | datetime |  optional  | no-required created_at
        `updated_at` | datetime |  optional  | no-required updated_at
    
<!-- END_36688fecafb90eabc00f6d05c49debcb -->

<!-- START_7a90c4c085dda1f6b65c715e4037eade -->
## api/v1/admin/feedback/get
> Example request:

```bash
curl -X GET \
    -G "http://almosque.loc/api/v1/admin/feedback/get" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://almosque.loc/api/v1/admin/feedback/get"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/v1/admin/feedback/get`


<!-- END_7a90c4c085dda1f6b65c715e4037eade -->

<!-- START_37a6123b379c31e01c14d591d2e99ede -->
## Feedback update

> Example request:

```bash
curl -X PUT \
    "http://almosque.loc/api/v1/admin/feedback/1?id=eum" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"id":"voluptatem","name":"et","email":"tenetur","phone":"tenetur","files":"ut","type":4,"object_id":7,"region_id":3,"district_id":19,"address":"enim","text":"iste","status":20,"is_deleted":15,"deleted_at":"deleniti","created_at":"omnis","updated_at":"esse"}'

```

```javascript
const url = new URL(
    "http://almosque.loc/api/v1/admin/feedback/1"
);

let params = {
    "id": "eum",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "id": "voluptatem",
    "name": "et",
    "email": "tenetur",
    "phone": "tenetur",
    "files": "ut",
    "type": 4,
    "object_id": 7,
    "region_id": 3,
    "district_id": 19,
    "address": "enim",
    "text": "iste",
    "status": 20,
    "is_deleted": 15,
    "deleted_at": "deleniti",
    "created_at": "omnis",
    "updated_at": "esse"
}

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/v1/admin/feedback/{id}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `id` |  required  | ID
#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `id` | bigint |  optional  | no-required id
        `name` | string |  optional  | no-required name
        `email` | string |  optional  | no-required email
        `phone` | string |  optional  | no-required phone
        `files` | string |  optional  | no-required files
        `type` | integer |  optional  | no-required type
        `object_id` | integer |  optional  | no-required object_id
        `region_id` | integer |  optional  | no-required region_id
        `district_id` | integer |  optional  | no-required district_id
        `address` | string |  optional  | no-required address
        `text` | text |  optional  | no-required text
        `status` | integer |  optional  | no-required status
        `is_deleted` | integer |  optional  | no-required is_deleted
        `deleted_at` | datetime |  optional  | no-required deleted_at
        `created_at` | datetime |  optional  | no-required created_at
        `updated_at` | datetime |  optional  | no-required updated_at
    
<!-- END_37a6123b379c31e01c14d591d2e99ede -->

<!-- START_fcf5b7dd1746b6a0aa52cf997c201d53 -->
## api/v1/admin/feedback/{id}
> Example request:

```bash
curl -X GET \
    -G "http://almosque.loc/api/v1/admin/feedback/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://almosque.loc/api/v1/admin/feedback/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/v1/admin/feedback/{id}`


<!-- END_fcf5b7dd1746b6a0aa52cf997c201d53 -->

<!-- START_9d4bfc738229de6a4120ec8a501a543c -->
## Feedback delete

> Example request:

```bash
curl -X DELETE \
    "http://almosque.loc/api/v1/admin/feedback/1?id=cum" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://almosque.loc/api/v1/admin/feedback/1"
);

let params = {
    "id": "cum",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/v1/admin/feedback/{id}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `id` |  required  | ID

<!-- END_9d4bfc738229de6a4120ec8a501a543c -->

<!-- START_623f171d6a053dd7eac74565934405f5 -->
## api/v1/feedback/get
> Example request:

```bash
curl -X GET \
    -G "http://almosque.loc/api/v1/feedback/get" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://almosque.loc/api/v1/feedback/get"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/v1/feedback/get`


<!-- END_623f171d6a053dd7eac74565934405f5 -->

<!-- START_6e97dc9a6aca86f90a0b524f8da36720 -->
## api/v1/feedback/object
> Example request:

```bash
curl -X POST \
    "http://almosque.loc/api/v1/feedback/object" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://almosque.loc/api/v1/feedback/object"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/feedback/object`


<!-- END_6e97dc9a6aca86f90a0b524f8da36720 -->

<!-- START_b6122cc9a0e0052c2205dbd7c1c86c24 -->
## Feedback Get all

> Example request:

```bash
curl -X GET \
    -G "http://almosque.loc/api/v1/feedback" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://almosque.loc/api/v1/feedback"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "id": "bigint",
    "name": "string",
    "email": "string",
    "phone": "string",
    "files": "string",
    "type": "integer",
    "object_id": "integer",
    "region_id": "integer",
    "district_id": "integer",
    "address": "string",
    "text": "text",
    "status": "integer",
    "is_deleted": "integer",
    "deleted_at": "datetime",
    "created_at": "datetime",
    "updated_at": "datetime",
    "roles": [
        "admin"
    ]
}
```

### HTTP Request
`GET api/v1/feedback`


<!-- END_b6122cc9a0e0052c2205dbd7c1c86c24 -->

<!-- START_5ea6ab61bf6bf721148887c0ced29d88 -->
## Feedback create

> Example request:

```bash
curl -X POST \
    "http://almosque.loc/api/v1/feedback" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"id":"et","name":"vel","email":"est","phone":"blanditiis","files":"id","type":17,"object_id":9,"region_id":20,"district_id":18,"address":"ut","text":"officia","status":7,"is_deleted":2,"deleted_at":"dolorem","created_at":"id","updated_at":"sunt"}'

```

```javascript
const url = new URL(
    "http://almosque.loc/api/v1/feedback"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "id": "et",
    "name": "vel",
    "email": "est",
    "phone": "blanditiis",
    "files": "id",
    "type": 17,
    "object_id": 9,
    "region_id": 20,
    "district_id": 18,
    "address": "ut",
    "text": "officia",
    "status": 7,
    "is_deleted": 2,
    "deleted_at": "dolorem",
    "created_at": "id",
    "updated_at": "sunt"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/feedback`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `id` | bigint |  optional  | no-required id
        `name` | string |  optional  | no-required name
        `email` | string |  optional  | no-required email
        `phone` | string |  optional  | no-required phone
        `files` | string |  optional  | no-required files
        `type` | integer |  optional  | no-required type
        `object_id` | integer |  optional  | no-required object_id
        `region_id` | integer |  optional  | no-required region_id
        `district_id` | integer |  optional  | no-required district_id
        `address` | string |  optional  | no-required address
        `text` | text |  optional  | no-required text
        `status` | integer |  optional  | no-required status
        `is_deleted` | integer |  optional  | no-required is_deleted
        `deleted_at` | datetime |  optional  | no-required deleted_at
        `created_at` | datetime |  optional  | no-required created_at
        `updated_at` | datetime |  optional  | no-required updated_at
    
<!-- END_5ea6ab61bf6bf721148887c0ced29d88 -->

#Filemanager - Filemanager


<!-- START_fe9c328882475a3086bb6c33c57454f7 -->
## api/v1/admin/filemanager
> Example request:

```bash
curl -X GET \
    -G "http://almosque.loc/api/v1/admin/filemanager" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://almosque.loc/api/v1/admin/filemanager"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/v1/admin/filemanager`


<!-- END_fe9c328882475a3086bb6c33c57454f7 -->

<!-- START_715d54bdc0dab344c8056f8da3938f11 -->
## api/v1/admin/filemanager/{id}
> Example request:

```bash
curl -X GET \
    -G "http://almosque.loc/api/v1/admin/filemanager/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://almosque.loc/api/v1/admin/filemanager/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/v1/admin/filemanager/{id}`


<!-- END_715d54bdc0dab344c8056f8da3938f11 -->

<!-- START_20411a9c51efc6beb9d2b0cfdaa697c2 -->
## api/v1/admin/filemanager/{id}
> Example request:

```bash
curl -X PUT \
    "http://almosque.loc/api/v1/admin/filemanager/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://almosque.loc/api/v1/admin/filemanager/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/v1/admin/filemanager/{id}`


<!-- END_20411a9c51efc6beb9d2b0cfdaa697c2 -->

<!-- START_3e3d942d2f7e2f296e2564917548fbbc -->
## api/v1/admin/filemanager/{id}
> Example request:

```bash
curl -X DELETE \
    "http://almosque.loc/api/v1/admin/filemanager/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://almosque.loc/api/v1/admin/filemanager/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/v1/admin/filemanager/{id}`


<!-- END_3e3d942d2f7e2f296e2564917548fbbc -->

<!-- START_be79ac07fead71b2a35911c7b8325bbd -->
## Filemanager Uploads

> Example request:

```bash
curl -X POST \
    "http://almosque.loc/api/v1/admin/filemanager/uploads" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"files":"iusto"}'

```

```javascript
const url = new URL(
    "http://almosque.loc/api/v1/admin/filemanager/uploads"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "files": "iusto"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/admin/filemanager/uploads`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `files` | file |  required  | File
    
<!-- END_be79ac07fead71b2a35911c7b8325bbd -->

<!-- START_039192d31a4210f8bedbd5011660a7e9 -->
## api/v1/filemanager/{id}
> Example request:

```bash
curl -X DELETE \
    "http://almosque.loc/api/v1/filemanager/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://almosque.loc/api/v1/filemanager/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/v1/filemanager/{id}`


<!-- END_039192d31a4210f8bedbd5011660a7e9 -->

<!-- START_eb32ba3df74de7e9d5558332f555eb7d -->
## Filemanager Uploads

> Example request:

```bash
curl -X POST \
    "http://almosque.loc/api/v1/filemanager/uploads" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"files":"dolorem"}'

```

```javascript
const url = new URL(
    "http://almosque.loc/api/v1/filemanager/uploads"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "files": "dolorem"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/filemanager/uploads`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `files` | file |  required  | File
    
<!-- END_eb32ba3df74de7e9d5558332f555eb7d -->

<!-- START_6d588e956c82c24658dfea7f408a9c90 -->
## filemanager
> Example request:

```bash
curl -X GET \
    -G "http://almosque.loc/filemanager" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://almosque.loc/filemanager"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "current_page": 1,
    "data": [],
    "first_page_url": "http:\/\/localhost\/filemanager?page=1",
    "from": null,
    "last_page": 1,
    "last_page_url": "http:\/\/localhost\/filemanager?page=1",
    "next_page_url": null,
    "path": "http:\/\/localhost\/filemanager",
    "per_page": 15,
    "prev_page_url": null,
    "to": null,
    "total": 0
}
```

### HTTP Request
`GET filemanager`


<!-- END_6d588e956c82c24658dfea7f408a9c90 -->

#FilemanagerFolder - FilemanagerFolder


<!-- START_dcf48a99f0f5038490a39b1f6b2c5220 -->
## api/v1/admin/filemanager/folder
> Example request:

```bash
curl -X GET \
    -G "http://almosque.loc/api/v1/admin/filemanager/folder" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://almosque.loc/api/v1/admin/filemanager/folder"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/v1/admin/filemanager/folder`


<!-- END_dcf48a99f0f5038490a39b1f6b2c5220 -->

<!-- START_e3bc2403ac8c316cfa2e391d3ed9be43 -->
## api/v1/admin/filemanager/folder/{id}
> Example request:

```bash
curl -X GET \
    -G "http://almosque.loc/api/v1/admin/filemanager/folder/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://almosque.loc/api/v1/admin/filemanager/folder/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/v1/admin/filemanager/folder/{id}`


<!-- END_e3bc2403ac8c316cfa2e391d3ed9be43 -->

<!-- START_38950588f1310f4227cc08b386fd6e75 -->
## api/v1/admin/filemanager/folder
> Example request:

```bash
curl -X POST \
    "http://almosque.loc/api/v1/admin/filemanager/folder" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://almosque.loc/api/v1/admin/filemanager/folder"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/admin/filemanager/folder`


<!-- END_38950588f1310f4227cc08b386fd6e75 -->

<!-- START_5b9adcd969a5b36ac0b70acd389941ea -->
## api/v1/admin/filemanager/folder/{id}
> Example request:

```bash
curl -X PUT \
    "http://almosque.loc/api/v1/admin/filemanager/folder/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://almosque.loc/api/v1/admin/filemanager/folder/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/v1/admin/filemanager/folder/{id}`


<!-- END_5b9adcd969a5b36ac0b70acd389941ea -->

<!-- START_4ad6b371a68906a389cdf2c85ecd67be -->
## api/v1/admin/filemanager/folder/{id}
> Example request:

```bash
curl -X DELETE \
    "http://almosque.loc/api/v1/admin/filemanager/folder/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://almosque.loc/api/v1/admin/filemanager/folder/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/v1/admin/filemanager/folder/{id}`


<!-- END_4ad6b371a68906a389cdf2c85ecd67be -->

#Menu


<!-- START_0985289593e71ce988f4ec5e5b1e7048 -->
## Menu Get all

> Example request:

```bash
curl -X GET \
    -G "http://almosque.loc/api/v1/admin/menu" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://almosque.loc/api/v1/admin/menu"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "id": "bigint",
    "title": "string",
    "alias": "string",
    "type": "integer",
    "lang": "integer",
    "lang_hash": "string",
    "status": "integer",
    "is_deleted": "integer",
    "deleted_at": "datetime",
    "created_at": "datetime",
    "updated_at": "datetime",
    "roles": [
        "admin"
    ]
}
```

### HTTP Request
`GET api/v1/admin/menu`


<!-- END_0985289593e71ce988f4ec5e5b1e7048 -->

<!-- START_5453587ada5ee373eb8450f6fc5ba988 -->
## Menu create

> Example request:

```bash
curl -X POST \
    "http://almosque.loc/api/v1/admin/menu" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"menu_id":"sit","title":"repellat","alias":"aut","type":15,"lang":10,"lang_hash":"repellendus","status":4,"is_deleted":8,"deleted_at":"quis","created_at":"sint","updated_at":"corporis"}'

```

```javascript
const url = new URL(
    "http://almosque.loc/api/v1/admin/menu"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "menu_id": "sit",
    "title": "repellat",
    "alias": "aut",
    "type": 15,
    "lang": 10,
    "lang_hash": "repellendus",
    "status": 4,
    "is_deleted": 8,
    "deleted_at": "quis",
    "created_at": "sint",
    "updated_at": "corporis"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/admin/menu`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `menu_id` | bigint |  optional  | no-required menu_id
        `title` | string |  optional  | no-required title
        `alias` | string |  optional  | no-required alias
        `type` | integer |  optional  | no-required type
        `lang` | integer |  optional  | no-required lang
        `lang_hash` | string |  optional  | no-required lang_hash
        `status` | integer |  optional  | no-required status
        `is_deleted` | integer |  optional  | no-required is_deleted
        `deleted_at` | datetime |  optional  | no-required deleted_at
        `created_at` | datetime |  optional  | no-required created_at
        `updated_at` | datetime |  optional  | no-required updated_at
    
<!-- END_5453587ada5ee373eb8450f6fc5ba988 -->

<!-- START_3a1dc9e9901c0846326a80f4bad07666 -->
## Menu update

> Example request:

```bash
curl -X PUT \
    "http://almosque.loc/api/v1/admin/menu/1?id=quidem" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"menu_id":"et","title":"placeat","alias":"iusto","type":18,"lang":2,"lang_hash":"repellat","status":16,"is_deleted":1,"deleted_at":"qui","created_at":"ut","updated_at":"non"}'

```

```javascript
const url = new URL(
    "http://almosque.loc/api/v1/admin/menu/1"
);

let params = {
    "id": "quidem",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "menu_id": "et",
    "title": "placeat",
    "alias": "iusto",
    "type": 18,
    "lang": 2,
    "lang_hash": "repellat",
    "status": 16,
    "is_deleted": 1,
    "deleted_at": "qui",
    "created_at": "ut",
    "updated_at": "non"
}

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/v1/admin/menu/{id}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `id` |  required  | ID
#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `menu_id` | bigint |  optional  | no-required menu_id
        `title` | string |  optional  | no-required title
        `alias` | string |  optional  | no-required alias
        `type` | integer |  optional  | no-required type
        `lang` | integer |  optional  | no-required lang
        `lang_hash` | string |  optional  | no-required lang_hash
        `status` | integer |  optional  | no-required status
        `is_deleted` | integer |  optional  | no-required is_deleted
        `deleted_at` | datetime |  optional  | no-required deleted_at
        `created_at` | datetime |  optional  | no-required created_at
        `updated_at` | datetime |  optional  | no-required updated_at
    
<!-- END_3a1dc9e9901c0846326a80f4bad07666 -->

<!-- START_8e6d878a8554371468c7938e87e0c399 -->
## api/v1/admin/menu/{id}
> Example request:

```bash
curl -X GET \
    -G "http://almosque.loc/api/v1/admin/menu/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://almosque.loc/api/v1/admin/menu/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/v1/admin/menu/{id}`


<!-- END_8e6d878a8554371468c7938e87e0c399 -->

<!-- START_63117314380b08562cc9d66685b76c37 -->
## api/v1/admin/menu/{slug}
> Example request:

```bash
curl -X GET \
    -G "http://almosque.loc/api/v1/admin/menu/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://almosque.loc/api/v1/admin/menu/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/v1/admin/menu/{slug}`


<!-- END_63117314380b08562cc9d66685b76c37 -->

<!-- START_311ec61f2f18d3e1548bfe11d09d5d02 -->
## Menu delete

> Example request:

```bash
curl -X DELETE \
    "http://almosque.loc/api/v1/admin/menu/1?id=repudiandae" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://almosque.loc/api/v1/admin/menu/1"
);

let params = {
    "id": "repudiandae",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/v1/admin/menu/{id}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `id` |  required  | ID

<!-- END_311ec61f2f18d3e1548bfe11d09d5d02 -->

<!-- START_3b4d1dbdbdb2bd3fbbbe09ac29053c3e -->
## Menu Get all

> Example request:

```bash
curl -X GET \
    -G "http://almosque.loc/api/v1/menu" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://almosque.loc/api/v1/menu"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "id": "bigint",
    "title": "string",
    "alias": "string",
    "type": "integer",
    "lang": "integer",
    "lang_hash": "string",
    "status": "integer",
    "is_deleted": "integer",
    "deleted_at": "datetime",
    "created_at": "datetime",
    "updated_at": "datetime",
    "roles": [
        "admin"
    ]
}
```

### HTTP Request
`GET api/v1/menu`


<!-- END_3b4d1dbdbdb2bd3fbbbe09ac29053c3e -->

<!-- START_de9f7c67c9b34495913160b66459ee29 -->
## api/v1/menu/{id}
> Example request:

```bash
curl -X GET \
    -G "http://almosque.loc/api/v1/menu/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://almosque.loc/api/v1/menu/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (404):

```json
{
    "message": "No query results for model [App\\Models\\Menu] 1"
}
```

### HTTP Request
`GET api/v1/menu/{id}`


<!-- END_de9f7c67c9b34495913160b66459ee29 -->

<!-- START_ef3697f9298fa61efbc05112833ddbac -->
## api/v1/menu/{slug}
> Example request:

```bash
curl -X GET \
    -G "http://almosque.loc/api/v1/menu/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://almosque.loc/api/v1/menu/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (404):

```json
{
    "message": "No query results for model [App\\Models\\Menu] 1"
}
```

### HTTP Request
`GET api/v1/menu/{slug}`


<!-- END_ef3697f9298fa61efbc05112833ddbac -->

#MenuItems


<!-- START_495acc66ae87cc5c35d960e9184341d7 -->
## MenuItems Get all

> Example request:

```bash
curl -X GET \
    -G "http://almosque.loc/api/v1/admin/menu-items" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://almosque.loc/api/v1/admin/menu-items"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "roles": [
        "admin"
    ]
}
```

### HTTP Request
`GET api/v1/admin/menu-items`


<!-- END_495acc66ae87cc5c35d960e9184341d7 -->

<!-- START_51d7b465e1778f9d17e12028158bc2cb -->
## MenuItems create

> Example request:

```bash
curl -X POST \
    "http://almosque.loc/api/v1/admin/menu-items" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://almosque.loc/api/v1/admin/menu-items"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/admin/menu-items`


<!-- END_51d7b465e1778f9d17e12028158bc2cb -->

<!-- START_66a8a7d35110af33e03ba2d1fe4802e7 -->
## MenuItems update

> Example request:

```bash
curl -X PUT \
    "http://almosque.loc/api/v1/admin/menu-items/1?id=nisi" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://almosque.loc/api/v1/admin/menu-items/1"
);

let params = {
    "id": "nisi",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/v1/admin/menu-items/{id}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `id` |  required  | ID

<!-- END_66a8a7d35110af33e03ba2d1fe4802e7 -->

<!-- START_92d6314ed16b3f07ad929336e3412daf -->
## api/v1/admin/menu-items/sort
> Example request:

```bash
curl -X PUT \
    "http://almosque.loc/api/v1/admin/menu-items/sort" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://almosque.loc/api/v1/admin/menu-items/sort"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/v1/admin/menu-items/sort`


<!-- END_92d6314ed16b3f07ad929336e3412daf -->

<!-- START_a698812008eafe40128b1d65383a38b2 -->
## api/v1/admin/menu-items/{id}
> Example request:

```bash
curl -X GET \
    -G "http://almosque.loc/api/v1/admin/menu-items/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://almosque.loc/api/v1/admin/menu-items/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/v1/admin/menu-items/{id}`


<!-- END_a698812008eafe40128b1d65383a38b2 -->

<!-- START_1692508af914b496c3c25486cf42c370 -->
## MenuItems delete

> Example request:

```bash
curl -X DELETE \
    "http://almosque.loc/api/v1/admin/menu-items/1?id=cupiditate" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://almosque.loc/api/v1/admin/menu-items/1"
);

let params = {
    "id": "cupiditate",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/v1/admin/menu-items/{id}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `id` |  required  | ID

<!-- END_1692508af914b496c3c25486cf42c370 -->

<!-- START_05e55b5f0d22230cd05901d8dc22cd0d -->
## MenuItems Get all

> Example request:

```bash
curl -X GET \
    -G "http://almosque.loc/api/v1/menu-items" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://almosque.loc/api/v1/menu-items"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "roles": [
        "admin"
    ]
}
```

### HTTP Request
`GET api/v1/menu-items`


<!-- END_05e55b5f0d22230cd05901d8dc22cd0d -->

<!-- START_35253558f1884f62a9b1d770515be85e -->
## api/v1/menu-items/{id}
> Example request:

```bash
curl -X GET \
    -G "http://almosque.loc/api/v1/menu-items/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://almosque.loc/api/v1/menu-items/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (404):

```json
{
    "message": "No query results for model [App\\Models\\MenuItems] 1"
}
```

### HTTP Request
`GET api/v1/menu-items/{id}`


<!-- END_35253558f1884f62a9b1d770515be85e -->

#Page


<!-- START_e4bb15306b7788f8688ca7705a6aa67b -->
## api/v1/admin/pages
> Example request:

```bash
curl -X GET \
    -G "http://almosque.loc/api/v1/admin/pages" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://almosque.loc/api/v1/admin/pages"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/v1/admin/pages`


<!-- END_e4bb15306b7788f8688ca7705a6aa67b -->

<!-- START_37ae9e059e6349f8069088e65500a44c -->
## Page create

> Example request:

```bash
curl -X POST \
    "http://almosque.loc/api/v1/admin/pages" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"id":"harum","title":"provident","slug":"alias","description":"exercitationem","type":19,"files":"molestiae","anons":"earum","status":3,"is_deleted":18,"lang_hash":"eaque","lang":1,"deleted_at":"sunt","created_at":"aut","updated_at":"sed"}'

```

```javascript
const url = new URL(
    "http://almosque.loc/api/v1/admin/pages"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "id": "harum",
    "title": "provident",
    "slug": "alias",
    "description": "exercitationem",
    "type": 19,
    "files": "molestiae",
    "anons": "earum",
    "status": 3,
    "is_deleted": 18,
    "lang_hash": "eaque",
    "lang": 1,
    "deleted_at": "sunt",
    "created_at": "aut",
    "updated_at": "sed"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/admin/pages`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `id` | bigint |  optional  | no-required id
        `title` | string |  optional  | no-required title
        `slug` | string |  optional  | no-required slug
        `description` | text |  optional  | no-required description
        `type` | integer |  optional  | no-required type
        `files` | string |  optional  | no-required files
        `anons` | string |  optional  | no-required anons
        `status` | integer |  optional  | no-required status
        `is_deleted` | integer |  optional  | no-required is_deleted
        `lang_hash` | string |  optional  | no-required lang_hash
        `lang` | integer |  optional  | no-required lang
        `deleted_at` | datetime |  optional  | no-required deleted_at
        `created_at` | datetime |  optional  | no-required created_at
        `updated_at` | datetime |  optional  | no-required updated_at
    
<!-- END_37ae9e059e6349f8069088e65500a44c -->

<!-- START_1c9eac3416e49a0754b37f3e2b3bed0f -->
## Page update

> Example request:

```bash
curl -X PUT \
    "http://almosque.loc/api/v1/admin/pages/1?id=quia" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"id":"ratione","title":"adipisci","slug":"vero","description":"exercitationem","type":17,"files":"soluta","anons":"voluptatem","status":10,"is_deleted":15,"lang_hash":"autem","lang":8,"deleted_at":"numquam","created_at":"facilis","updated_at":"est"}'

```

```javascript
const url = new URL(
    "http://almosque.loc/api/v1/admin/pages/1"
);

let params = {
    "id": "quia",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "id": "ratione",
    "title": "adipisci",
    "slug": "vero",
    "description": "exercitationem",
    "type": 17,
    "files": "soluta",
    "anons": "voluptatem",
    "status": 10,
    "is_deleted": 15,
    "lang_hash": "autem",
    "lang": 8,
    "deleted_at": "numquam",
    "created_at": "facilis",
    "updated_at": "est"
}

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/v1/admin/pages/{id}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `id` |  required  | ID
#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `id` | bigint |  optional  | no-required id
        `title` | string |  optional  | no-required title
        `slug` | string |  optional  | no-required slug
        `description` | text |  optional  | no-required description
        `type` | integer |  optional  | no-required type
        `files` | string |  optional  | no-required files
        `anons` | string |  optional  | no-required anons
        `status` | integer |  optional  | no-required status
        `is_deleted` | integer |  optional  | no-required is_deleted
        `lang_hash` | string |  optional  | no-required lang_hash
        `lang` | integer |  optional  | no-required lang
        `deleted_at` | datetime |  optional  | no-required deleted_at
        `created_at` | datetime |  optional  | no-required created_at
        `updated_at` | datetime |  optional  | no-required updated_at
    
<!-- END_1c9eac3416e49a0754b37f3e2b3bed0f -->

<!-- START_3f523cfce4ee8fa61b5093f8ac6c41f6 -->
## api/v1/admin/pages/{id}
> Example request:

```bash
curl -X GET \
    -G "http://almosque.loc/api/v1/admin/pages/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://almosque.loc/api/v1/admin/pages/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/v1/admin/pages/{id}`


<!-- END_3f523cfce4ee8fa61b5093f8ac6c41f6 -->

<!-- START_a09e01c56daf475a343f7a13afd4db30 -->
## Page delete

> Example request:

```bash
curl -X DELETE \
    "http://almosque.loc/api/v1/admin/pages/1?id=dolorem" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://almosque.loc/api/v1/admin/pages/1"
);

let params = {
    "id": "dolorem",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/v1/admin/pages/{id}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `id` |  required  | ID

<!-- END_a09e01c56daf475a343f7a13afd4db30 -->

<!-- START_f0bb47ebe642912f2525d54503f865be -->
## api/v1/pages
> Example request:

```bash
curl -X GET \
    -G "http://almosque.loc/api/v1/pages" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://almosque.loc/api/v1/pages"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/v1/pages`


<!-- END_f0bb47ebe642912f2525d54503f865be -->

<!-- START_a83b4b5208654ceb3bad3b024cf63591 -->
## api/v1/pages/{id}
> Example request:

```bash
curl -X GET \
    -G "http://almosque.loc/api/v1/pages/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://almosque.loc/api/v1/pages/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (404):

```json
{
    "message": "No query results for model [App\\Models\\Page] 1"
}
```

### HTTP Request
`GET api/v1/pages/{id}`


<!-- END_a83b4b5208654ceb3bad3b024cf63591 -->

<!-- START_bbff91f0f1b0fdbcb690cc9a99dcafeb -->
## api/v1/pages/{slug}
> Example request:

```bash
curl -X GET \
    -G "http://almosque.loc/api/v1/pages/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://almosque.loc/api/v1/pages/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (404):

```json
{
    "message": "No query results for model [App\\Models\\Page] 1"
}
```

### HTTP Request
`GET api/v1/pages/{slug}`


<!-- END_bbff91f0f1b0fdbcb690cc9a99dcafeb -->

#Post


<!-- START_de624ebdfc033d5ef2ff088a06eb8266 -->
## Post Get all

> Example request:

```bash
curl -X GET \
    -G "http://almosque.loc/api/v1/admin/posts" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://almosque.loc/api/v1/admin/posts"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "id": "bigint",
    "title": "string",
    "content": "string",
    "top": "integer",
    "popular": "integer",
    "description": "string",
    "type": "integer",
    "image": "string",
    "video": "string",
    "category_id": "integer",
    "status": "integer",
    "published_at": "datetime",
    "created_at": "datetime",
    "updated_at": "datetime",
    "roles": [
        "admin"
    ]
}
```

### HTTP Request
`GET api/v1/admin/posts`


<!-- END_de624ebdfc033d5ef2ff088a06eb8266 -->

<!-- START_5b4d6e8241a1bdbde6bf1c9014d05f53 -->
## Post create

> Example request:

```bash
curl -X POST \
    "http://almosque.loc/api/v1/admin/posts" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"id":"asperiores","title":"molestiae","content":"magnam","top":2,"popular":15,"description":"est","type":3,"image":"suscipit","video":"est","category_id":18,"status":10,"published_at":"eum","created_at":"corrupti","updated_at":"voluptatum"}'

```

```javascript
const url = new URL(
    "http://almosque.loc/api/v1/admin/posts"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "id": "asperiores",
    "title": "molestiae",
    "content": "magnam",
    "top": 2,
    "popular": 15,
    "description": "est",
    "type": 3,
    "image": "suscipit",
    "video": "est",
    "category_id": 18,
    "status": 10,
    "published_at": "eum",
    "created_at": "corrupti",
    "updated_at": "voluptatum"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/admin/posts`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `id` | bigint |  optional  | no-required id
        `title` | string |  optional  | no-required title
        `content` | string |  optional  | no-required content
        `top` | integer |  optional  | no-required top
        `popular` | integer |  optional  | no-required popular
        `description` | string |  optional  | no-required description
        `type` | integer |  optional  | no-required type
        `image` | string |  optional  | no-required image
        `video` | string |  optional  | no-required video
        `category_id` | integer |  optional  | no-required category_id
        `status` | integer |  optional  | no-required status
        `published_at` | datetime |  optional  | no-required published_at
        `created_at` | datetime |  optional  | no-required created_at
        `updated_at` | datetime |  optional  | no-required updated_at
    
<!-- END_5b4d6e8241a1bdbde6bf1c9014d05f53 -->

<!-- START_0d953fe902e22f1db4b952dd9250b0b1 -->
## Post update

> Example request:

```bash
curl -X PUT \
    "http://almosque.loc/api/v1/admin/posts/1?id=omnis" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"id":"debitis","title":"reiciendis","content":"accusantium","top":10,"popular":13,"description":"qui","type":13,"image":"neque","video":"illum","category_id":12,"status":19,"published_at":"magni","created_at":"ex","updated_at":"eum"}'

```

```javascript
const url = new URL(
    "http://almosque.loc/api/v1/admin/posts/1"
);

let params = {
    "id": "omnis",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "id": "debitis",
    "title": "reiciendis",
    "content": "accusantium",
    "top": 10,
    "popular": 13,
    "description": "qui",
    "type": 13,
    "image": "neque",
    "video": "illum",
    "category_id": 12,
    "status": 19,
    "published_at": "magni",
    "created_at": "ex",
    "updated_at": "eum"
}

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/v1/admin/posts/{id}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `id` |  required  | ID
#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `id` | bigint |  optional  | no-required id
        `title` | string |  optional  | no-required title
        `content` | string |  optional  | no-required content
        `top` | integer |  optional  | no-required top
        `popular` | integer |  optional  | no-required popular
        `description` | string |  optional  | no-required description
        `type` | integer |  optional  | no-required type
        `image` | string |  optional  | no-required image
        `video` | string |  optional  | no-required video
        `category_id` | integer |  optional  | no-required category_id
        `status` | integer |  optional  | no-required status
        `published_at` | datetime |  optional  | no-required published_at
        `created_at` | datetime |  optional  | no-required created_at
        `updated_at` | datetime |  optional  | no-required updated_at
    
<!-- END_0d953fe902e22f1db4b952dd9250b0b1 -->

<!-- START_4da95e247f34a931d0be8b1b0f409e02 -->
## Post view

> Example request:

```bash
curl -X GET \
    -G "http://almosque.loc/api/v1/admin/posts/1?id=architecto" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://almosque.loc/api/v1/admin/posts/1"
);

let params = {
    "id": "architecto",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "id": "bigint",
    "title": "string",
    "content": "string",
    "slug": "string",
    "top": "integer",
    "popular": "integer",
    "description": "string",
    "type": "integer",
    "image": "string",
    "video": "string",
    "category_id": "integer",
    "status": "integer",
    "published_at": "datetime",
    "created_at": "datetime",
    "updated_at": "datetime",
    "roles": [
        "all"
    ]
}
```

### HTTP Request
`GET api/v1/admin/posts/{id}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `id` |  required  | ID

<!-- END_4da95e247f34a931d0be8b1b0f409e02 -->

<!-- START_fd8d44b0be394afcdc0e168168165912 -->
## Post delete

> Example request:

```bash
curl -X DELETE \
    "http://almosque.loc/api/v1/admin/posts/1?id=labore" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://almosque.loc/api/v1/admin/posts/1"
);

let params = {
    "id": "labore",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/v1/admin/posts/{id}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `id` |  required  | ID

<!-- END_fd8d44b0be394afcdc0e168168165912 -->

<!-- START_6c47840c597cf143282487fae6e48a18 -->
## api/v1/admin/posts/popular
> Example request:

```bash
curl -X GET \
    -G "http://almosque.loc/api/v1/admin/posts/popular" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://almosque.loc/api/v1/admin/posts/popular"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/v1/admin/posts/popular`


<!-- END_6c47840c597cf143282487fae6e48a18 -->

<!-- START_0f4947d64c178ab47f7251ed9329e4f0 -->
## api/v1/admin/posts/top
> Example request:

```bash
curl -X GET \
    -G "http://almosque.loc/api/v1/admin/posts/top" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://almosque.loc/api/v1/admin/posts/top"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/v1/admin/posts/top`


<!-- END_0f4947d64c178ab47f7251ed9329e4f0 -->

<!-- START_97a830b5bfda179eae6c5b92eef1456c -->
## api/v1/admin/posts/viewed
> Example request:

```bash
curl -X GET \
    -G "http://almosque.loc/api/v1/admin/posts/viewed" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://almosque.loc/api/v1/admin/posts/viewed"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/v1/admin/posts/viewed`


<!-- END_97a830b5bfda179eae6c5b92eef1456c -->

<!-- START_b44fcd65726cfe1fc58d7294cb863b1f -->
## Post Get all

> Example request:

```bash
curl -X GET \
    -G "http://almosque.loc/api/v1/posts" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://almosque.loc/api/v1/posts"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "id": "bigint",
    "title": "string",
    "content": "string",
    "top": "integer",
    "popular": "integer",
    "description": "string",
    "type": "integer",
    "image": "string",
    "video": "string",
    "category_id": "integer",
    "status": "integer",
    "published_at": "datetime",
    "created_at": "datetime",
    "updated_at": "datetime",
    "roles": [
        "admin"
    ]
}
```

### HTTP Request
`GET api/v1/posts`


<!-- END_b44fcd65726cfe1fc58d7294cb863b1f -->

<!-- START_786eb0e298d6287c5b00cb05b6caeb73 -->
## Post view

> Example request:

```bash
curl -X GET \
    -G "http://almosque.loc/api/v1/posts/1?id=iste" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://almosque.loc/api/v1/posts/1"
);

let params = {
    "id": "iste",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "id": "bigint",
    "title": "string",
    "content": "string",
    "slug": "string",
    "top": "integer",
    "popular": "integer",
    "description": "string",
    "type": "integer",
    "image": "string",
    "video": "string",
    "category_id": "integer",
    "status": "integer",
    "published_at": "datetime",
    "created_at": "datetime",
    "updated_at": "datetime",
    "roles": [
        "all"
    ]
}
```

### HTTP Request
`GET api/v1/posts/{id}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `id` |  required  | ID

<!-- END_786eb0e298d6287c5b00cb05b6caeb73 -->

<!-- START_8c8dee3dc083fa8a3bbfd25342a7c1b6 -->
## Post create

> Example request:

```bash
curl -X POST \
    "http://almosque.loc/api/v1/posts" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"id":"et","title":"perspiciatis","content":"quasi","top":1,"popular":7,"description":"quia","type":17,"image":"omnis","video":"aliquam","category_id":20,"status":8,"published_at":"accusamus","created_at":"animi","updated_at":"perspiciatis"}'

```

```javascript
const url = new URL(
    "http://almosque.loc/api/v1/posts"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "id": "et",
    "title": "perspiciatis",
    "content": "quasi",
    "top": 1,
    "popular": 7,
    "description": "quia",
    "type": 17,
    "image": "omnis",
    "video": "aliquam",
    "category_id": 20,
    "status": 8,
    "published_at": "accusamus",
    "created_at": "animi",
    "updated_at": "perspiciatis"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/posts`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `id` | bigint |  optional  | no-required id
        `title` | string |  optional  | no-required title
        `content` | string |  optional  | no-required content
        `top` | integer |  optional  | no-required top
        `popular` | integer |  optional  | no-required popular
        `description` | string |  optional  | no-required description
        `type` | integer |  optional  | no-required type
        `image` | string |  optional  | no-required image
        `video` | string |  optional  | no-required video
        `category_id` | integer |  optional  | no-required category_id
        `status` | integer |  optional  | no-required status
        `published_at` | datetime |  optional  | no-required published_at
        `created_at` | datetime |  optional  | no-required created_at
        `updated_at` | datetime |  optional  | no-required updated_at
    
<!-- END_8c8dee3dc083fa8a3bbfd25342a7c1b6 -->

<!-- START_dd7266c1b85d466251f53c1f760c20a9 -->
## Post update

> Example request:

```bash
curl -X PUT \
    "http://almosque.loc/api/v1/posts/1?id=nisi" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"id":"optio","title":"laudantium","content":"molestiae","top":7,"popular":1,"description":"quos","type":17,"image":"ut","video":"in","category_id":2,"status":20,"published_at":"repellendus","created_at":"incidunt","updated_at":"quia"}'

```

```javascript
const url = new URL(
    "http://almosque.loc/api/v1/posts/1"
);

let params = {
    "id": "nisi",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "id": "optio",
    "title": "laudantium",
    "content": "molestiae",
    "top": 7,
    "popular": 1,
    "description": "quos",
    "type": 17,
    "image": "ut",
    "video": "in",
    "category_id": 2,
    "status": 20,
    "published_at": "repellendus",
    "created_at": "incidunt",
    "updated_at": "quia"
}

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/v1/posts/{id}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `id` |  required  | ID
#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `id` | bigint |  optional  | no-required id
        `title` | string |  optional  | no-required title
        `content` | string |  optional  | no-required content
        `top` | integer |  optional  | no-required top
        `popular` | integer |  optional  | no-required popular
        `description` | string |  optional  | no-required description
        `type` | integer |  optional  | no-required type
        `image` | string |  optional  | no-required image
        `video` | string |  optional  | no-required video
        `category_id` | integer |  optional  | no-required category_id
        `status` | integer |  optional  | no-required status
        `published_at` | datetime |  optional  | no-required published_at
        `created_at` | datetime |  optional  | no-required created_at
        `updated_at` | datetime |  optional  | no-required updated_at
    
<!-- END_dd7266c1b85d466251f53c1f760c20a9 -->

<!-- START_642d3764cda12f5746bf51a996a1780b -->
## Post delete

> Example request:

```bash
curl -X DELETE \
    "http://almosque.loc/api/v1/posts/1?id=omnis" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://almosque.loc/api/v1/posts/1"
);

let params = {
    "id": "omnis",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/v1/posts/{id}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `id` |  required  | ID

<!-- END_642d3764cda12f5746bf51a996a1780b -->

<!-- START_8a6aeb524438607ddaea279ba1ccc9a6 -->
## api/v1/posts/popular
> Example request:

```bash
curl -X GET \
    -G "http://almosque.loc/api/v1/posts/popular" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://almosque.loc/api/v1/posts/popular"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
[]
```

### HTTP Request
`GET api/v1/posts/popular`


<!-- END_8a6aeb524438607ddaea279ba1ccc9a6 -->

<!-- START_cb9759b5b3a5a97a583f14a75dcd0250 -->
## api/v1/posts/viewed
> Example request:

```bash
curl -X GET \
    -G "http://almosque.loc/api/v1/posts/viewed" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://almosque.loc/api/v1/posts/viewed"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`GET api/v1/posts/viewed`


<!-- END_cb9759b5b3a5a97a583f14a75dcd0250 -->

<!-- START_d73a78ca7d753a45b18a90eaf467a4fd -->
## api/v1/posts/top
> Example request:

```bash
curl -X GET \
    -G "http://almosque.loc/api/v1/posts/top" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://almosque.loc/api/v1/posts/top"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
[]
```

### HTTP Request
`GET api/v1/posts/top`


<!-- END_d73a78ca7d753a45b18a90eaf467a4fd -->

#Region


<!-- START_7fc74c6ac2a013fba9d1e10e6c0ec05e -->
## Region Get all

> Example request:

```bash
curl -X GET \
    -G "http://almosque.loc/api/v1/admin/regions" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://almosque.loc/api/v1/admin/regions"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "id": "bigint",
    "name": "string",
    "name_uz": "string",
    "name_ru": "string",
    "name_en": "string",
    "code": "string",
    "country_id": "integer",
    "status": "integer",
    "is_deleted": "integer",
    "deleted_at": "datetime",
    "created_at": "datetime",
    "updated_at": "datetime",
    "roles": [
        "admin"
    ]
}
```

### HTTP Request
`GET api/v1/admin/regions`


<!-- END_7fc74c6ac2a013fba9d1e10e6c0ec05e -->

<!-- START_80bd3977a15ae926683aad618f2a0e54 -->
## Region create

> Example request:

```bash
curl -X POST \
    "http://almosque.loc/api/v1/admin/regions" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"id":"quo","name":"non","name_uz":"totam","name_ru":"iste","name_en":"quas","code":"eaque","country_id":18,"status":6,"is_deleted":12,"deleted_at":"quia","created_at":"fugiat","updated_at":"officia"}'

```

```javascript
const url = new URL(
    "http://almosque.loc/api/v1/admin/regions"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "id": "quo",
    "name": "non",
    "name_uz": "totam",
    "name_ru": "iste",
    "name_en": "quas",
    "code": "eaque",
    "country_id": 18,
    "status": 6,
    "is_deleted": 12,
    "deleted_at": "quia",
    "created_at": "fugiat",
    "updated_at": "officia"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/admin/regions`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `id` | bigint |  optional  | no-required id
        `name` | string |  optional  | no-required name
        `name_uz` | string |  optional  | no-required name_uz
        `name_ru` | string |  optional  | no-required name_ru
        `name_en` | string |  optional  | no-required name_en
        `code` | string |  optional  | no-required code
        `country_id` | integer |  optional  | no-required country_id
        `status` | integer |  optional  | no-required status
        `is_deleted` | integer |  optional  | no-required is_deleted
        `deleted_at` | datetime |  optional  | no-required deleted_at
        `created_at` | datetime |  optional  | no-required created_at
        `updated_at` | datetime |  optional  | no-required updated_at
    
<!-- END_80bd3977a15ae926683aad618f2a0e54 -->

<!-- START_c8421ec2e18e736d35d3f3b3a5fcabd2 -->
## Region update

> Example request:

```bash
curl -X PUT \
    "http://almosque.loc/api/v1/admin/regions/1?id=dolor" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"id":"aspernatur","name":"officiis","name_uz":"reprehenderit","name_ru":"consequatur","name_en":"nobis","code":"dolores","country_id":5,"status":2,"is_deleted":7,"deleted_at":"culpa","created_at":"facere","updated_at":"sequi"}'

```

```javascript
const url = new URL(
    "http://almosque.loc/api/v1/admin/regions/1"
);

let params = {
    "id": "dolor",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "id": "aspernatur",
    "name": "officiis",
    "name_uz": "reprehenderit",
    "name_ru": "consequatur",
    "name_en": "nobis",
    "code": "dolores",
    "country_id": 5,
    "status": 2,
    "is_deleted": 7,
    "deleted_at": "culpa",
    "created_at": "facere",
    "updated_at": "sequi"
}

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/v1/admin/regions/{id}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `id` |  required  | ID
#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `id` | bigint |  optional  | no-required id
        `name` | string |  optional  | no-required name
        `name_uz` | string |  optional  | no-required name_uz
        `name_ru` | string |  optional  | no-required name_ru
        `name_en` | string |  optional  | no-required name_en
        `code` | string |  optional  | no-required code
        `country_id` | integer |  optional  | no-required country_id
        `status` | integer |  optional  | no-required status
        `is_deleted` | integer |  optional  | no-required is_deleted
        `deleted_at` | datetime |  optional  | no-required deleted_at
        `created_at` | datetime |  optional  | no-required created_at
        `updated_at` | datetime |  optional  | no-required updated_at
    
<!-- END_c8421ec2e18e736d35d3f3b3a5fcabd2 -->

<!-- START_9c5ffc66081866b68c168dc6bd413a1d -->
## api/v1/admin/regions/{id}
> Example request:

```bash
curl -X GET \
    -G "http://almosque.loc/api/v1/admin/regions/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://almosque.loc/api/v1/admin/regions/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/v1/admin/regions/{id}`


<!-- END_9c5ffc66081866b68c168dc6bd413a1d -->

<!-- START_984757b575748efe632249400d26121a -->
## Region delete

> Example request:

```bash
curl -X DELETE \
    "http://almosque.loc/api/v1/admin/regions/1?id=adipisci" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://almosque.loc/api/v1/admin/regions/1"
);

let params = {
    "id": "adipisci",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/v1/admin/regions/{id}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `id` |  required  | ID

<!-- END_984757b575748efe632249400d26121a -->

<!-- START_9f8b25db943f4986cb344335635be033 -->
## Region Get all

> Example request:

```bash
curl -X GET \
    -G "http://almosque.loc/api/v1/regions" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://almosque.loc/api/v1/regions"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "id": "bigint",
    "name": "string",
    "name_uz": "string",
    "name_ru": "string",
    "name_en": "string",
    "code": "string",
    "country_id": "integer",
    "status": "integer",
    "is_deleted": "integer",
    "deleted_at": "datetime",
    "created_at": "datetime",
    "updated_at": "datetime",
    "roles": [
        "admin"
    ]
}
```

### HTTP Request
`GET api/v1/regions`


<!-- END_9f8b25db943f4986cb344335635be033 -->

<!-- START_4ce887194f23acd83c2a92657b977660 -->
## api/v1/regions/{id}
> Example request:

```bash
curl -X GET \
    -G "http://almosque.loc/api/v1/regions/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://almosque.loc/api/v1/regions/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (404):

```json
{
    "message": "No query results for model [App\\Models\\Region] 1"
}
```

### HTTP Request
`GET api/v1/regions/{id}`


<!-- END_4ce887194f23acd83c2a92657b977660 -->

#Settings


<!-- START_bb368aac5e0c8783f374f190bedb96da -->
## Settings Get all

> Example request:

```bash
curl -X GET \
    -G "http://almosque.loc/api/v1/admin/settings" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://almosque.loc/api/v1/admin/settings"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "id": "bigint",
    "name": "string",
    "value": "string",
    "photo": "string",
    "slug": "string",
    "link": "string",
    "alias": "string",
    "lang_hash": "string",
    "sort": "integer",
    "lang": "integer",
    "status": "integer",
    "is_deleted": "integer",
    "deleted_at": "datetime",
    "created_at": "datetime",
    "updated_at": "datetime",
    "roles": [
        "admin"
    ]
}
```

### HTTP Request
`GET api/v1/admin/settings`


<!-- END_bb368aac5e0c8783f374f190bedb96da -->

<!-- START_c7eb2c98d1e8ae7a81c3bc3e32bc220e -->
## Settings create

> Example request:

```bash
curl -X POST \
    "http://almosque.loc/api/v1/admin/settings" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"id":"ipsum","name":"et","value":"dicta","photo":"porro","slug":"laboriosam","link":"voluptatem","alias":"rerum","lang_hash":"amet","sort":17,"lang":6,"status":1,"is_deleted":19,"deleted_at":"quia","created_at":"repudiandae","updated_at":"alias"}'

```

```javascript
const url = new URL(
    "http://almosque.loc/api/v1/admin/settings"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "id": "ipsum",
    "name": "et",
    "value": "dicta",
    "photo": "porro",
    "slug": "laboriosam",
    "link": "voluptatem",
    "alias": "rerum",
    "lang_hash": "amet",
    "sort": 17,
    "lang": 6,
    "status": 1,
    "is_deleted": 19,
    "deleted_at": "quia",
    "created_at": "repudiandae",
    "updated_at": "alias"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/admin/settings`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `id` | bigint |  optional  | no-required id
        `name` | string |  optional  | no-required name
        `value` | string |  optional  | no-required value
        `photo` | string |  optional  | no-required photo
        `slug` | string |  optional  | no-required slug
        `link` | string |  optional  | no-required link
        `alias` | string |  optional  | no-required alias
        `lang_hash` | string |  optional  | no-required lang_hash
        `sort` | integer |  optional  | no-required sort
        `lang` | integer |  optional  | no-required lang
        `status` | integer |  optional  | no-required status
        `is_deleted` | integer |  optional  | no-required is_deleted
        `deleted_at` | datetime |  optional  | no-required deleted_at
        `created_at` | datetime |  optional  | no-required created_at
        `updated_at` | datetime |  optional  | no-required updated_at
    
<!-- END_c7eb2c98d1e8ae7a81c3bc3e32bc220e -->

<!-- START_f59f6b955fb8574203828f15d21c1f85 -->
## Settings update

> Example request:

```bash
curl -X PUT \
    "http://almosque.loc/api/v1/admin/settings/1?id=ut" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"id":"asperiores","name":"ut","value":"dolore","photo":"molestiae","slug":"ea","link":"qui","alias":"sint","lang_hash":"perspiciatis","sort":12,"lang":18,"status":6,"is_deleted":7,"deleted_at":"voluptas","created_at":"omnis","updated_at":"officia"}'

```

```javascript
const url = new URL(
    "http://almosque.loc/api/v1/admin/settings/1"
);

let params = {
    "id": "ut",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "id": "asperiores",
    "name": "ut",
    "value": "dolore",
    "photo": "molestiae",
    "slug": "ea",
    "link": "qui",
    "alias": "sint",
    "lang_hash": "perspiciatis",
    "sort": 12,
    "lang": 18,
    "status": 6,
    "is_deleted": 7,
    "deleted_at": "voluptas",
    "created_at": "omnis",
    "updated_at": "officia"
}

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/v1/admin/settings/{id}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `id` |  required  | ID
#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `id` | bigint |  optional  | no-required id
        `name` | string |  optional  | no-required name
        `value` | string |  optional  | no-required value
        `photo` | string |  optional  | no-required photo
        `slug` | string |  optional  | no-required slug
        `link` | string |  optional  | no-required link
        `alias` | string |  optional  | no-required alias
        `lang_hash` | string |  optional  | no-required lang_hash
        `sort` | integer |  optional  | no-required sort
        `lang` | integer |  optional  | no-required lang
        `status` | integer |  optional  | no-required status
        `is_deleted` | integer |  optional  | no-required is_deleted
        `deleted_at` | datetime |  optional  | no-required deleted_at
        `created_at` | datetime |  optional  | no-required created_at
        `updated_at` | datetime |  optional  | no-required updated_at
    
<!-- END_f59f6b955fb8574203828f15d21c1f85 -->

<!-- START_b177116d01d38b1ea00bb5899b048445 -->
## api/v1/admin/settings/{id}
> Example request:

```bash
curl -X GET \
    -G "http://almosque.loc/api/v1/admin/settings/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://almosque.loc/api/v1/admin/settings/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/v1/admin/settings/{id}`


<!-- END_b177116d01d38b1ea00bb5899b048445 -->

<!-- START_eea5df5e50f908a413b3b67da8ba97f6 -->
## api/v1/admin/settings/{slug}
> Example request:

```bash
curl -X GET \
    -G "http://almosque.loc/api/v1/admin/settings/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://almosque.loc/api/v1/admin/settings/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/v1/admin/settings/{slug}`


<!-- END_eea5df5e50f908a413b3b67da8ba97f6 -->

<!-- START_d18ac32b6b0a3692f9dbb33341c411e4 -->
## Settings delete

> Example request:

```bash
curl -X DELETE \
    "http://almosque.loc/api/v1/admin/settings/1?id=deserunt" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://almosque.loc/api/v1/admin/settings/1"
);

let params = {
    "id": "deserunt",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/v1/admin/settings/{id}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `id` |  required  | ID

<!-- END_d18ac32b6b0a3692f9dbb33341c411e4 -->

<!-- START_0f7c405a059a084f42490f2decb1584b -->
## Settings Get all

> Example request:

```bash
curl -X GET \
    -G "http://almosque.loc/api/v1/settings" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://almosque.loc/api/v1/settings"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "id": "bigint",
    "name": "string",
    "value": "string",
    "photo": "string",
    "slug": "string",
    "link": "string",
    "alias": "string",
    "lang_hash": "string",
    "sort": "integer",
    "lang": "integer",
    "status": "integer",
    "is_deleted": "integer",
    "deleted_at": "datetime",
    "created_at": "datetime",
    "updated_at": "datetime",
    "roles": [
        "admin"
    ]
}
```

### HTTP Request
`GET api/v1/settings`


<!-- END_0f7c405a059a084f42490f2decb1584b -->

<!-- START_58845338d340da1ca3cb6f2b7d4b51ff -->
## api/v1/admin/langs
> Example request:

```bash
curl -X GET \
    -G "http://almosque.loc/api/v1/admin/langs" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://almosque.loc/api/v1/admin/langs"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/v1/admin/langs`


<!-- END_58845338d340da1ca3cb6f2b7d4b51ff -->

<!-- START_acfc759312301e8973fc1abd7e7ab939 -->
## api/v1/admin/langs
> Example request:

```bash
curl -X POST \
    "http://almosque.loc/api/v1/admin/langs" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://almosque.loc/api/v1/admin/langs"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/admin/langs`


<!-- END_acfc759312301e8973fc1abd7e7ab939 -->

<!-- START_d40ad3c609a0b5e28c400d6ab46ec7d8 -->
## api/v1/admin/langs/{id}
> Example request:

```bash
curl -X PUT \
    "http://almosque.loc/api/v1/admin/langs/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://almosque.loc/api/v1/admin/langs/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/v1/admin/langs/{id}`


<!-- END_d40ad3c609a0b5e28c400d6ab46ec7d8 -->

<!-- START_d355024b5064ee10ed7d1cd6d2602160 -->
## api/v1/admin/langs/{id}
> Example request:

```bash
curl -X GET \
    -G "http://almosque.loc/api/v1/admin/langs/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://almosque.loc/api/v1/admin/langs/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/v1/admin/langs/{id}`


<!-- END_d355024b5064ee10ed7d1cd6d2602160 -->

#User


<!-- START_a10aa585c982194fd4c4619b3a25f98d -->
## User sign-in

> Example request:

```bash
curl -X POST \
    "http://almosque.loc/api/v1/admin/user/sign-in" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"corrupti","password":"non"}'

```

```javascript
const url = new URL(
    "http://almosque.loc/api/v1/admin/user/sign-in"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "corrupti",
    "password": "non"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/admin/user/sign-in`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `name` | string |  required  | name
        `password` | string |  required  | password
    
<!-- END_a10aa585c982194fd4c4619b3a25f98d -->

<!-- START_9cafc90ccf899b3989f83a1a368ffcd5 -->
## api/v1/admin/user
> Example request:

```bash
curl -X GET \
    -G "http://almosque.loc/api/v1/admin/user" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://almosque.loc/api/v1/admin/user"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/v1/admin/user`


<!-- END_9cafc90ccf899b3989f83a1a368ffcd5 -->

<!-- START_63b209fd4db9f1789cf3050b5b5e742e -->
## User get-me

> Example request:

```bash
curl -X GET \
    -G "http://almosque.loc/api/v1/admin/user/get-me?token=at" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://almosque.loc/api/v1/admin/user/get-me"
);

let params = {
    "token": "at",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/v1/admin/user/get-me`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `token` |  optional  | string required token

<!-- END_63b209fd4db9f1789cf3050b5b5e742e -->

<!-- START_0650f5672796d52740f0b0c7143a2e2d -->
## User logout

> Example request:

```bash
curl -X POST \
    "http://almosque.loc/api/v1/admin/user/logout" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://almosque.loc/api/v1/admin/user/logout"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/admin/user/logout`


<!-- END_0650f5672796d52740f0b0c7143a2e2d -->

<!-- START_a8f2cd73f7f241bac59f75ba0b3cb4bd -->
## User create

> Example request:

```bash
curl -X POST \
    "http://almosque.loc/api/v1/admin/user" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://almosque.loc/api/v1/admin/user"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/admin/user`


<!-- END_a8f2cd73f7f241bac59f75ba0b3cb4bd -->

<!-- START_b84bc995ebaf16fcbb87cec8a93d6d99 -->
## User update

> Example request:

```bash
curl -X PUT \
    "http://almosque.loc/api/v1/admin/user/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://almosque.loc/api/v1/admin/user/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/v1/admin/user/{id}`


<!-- END_b84bc995ebaf16fcbb87cec8a93d6d99 -->

<!-- START_b60fec1ab473fb3e428a9fbfee70e275 -->
## Update current user

> Example request:

```bash
curl -X PUT \
    "http://almosque.loc/api/v1/admin/user/update-admin" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://almosque.loc/api/v1/admin/user/update-admin"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/v1/admin/user/update-admin`


<!-- END_b60fec1ab473fb3e428a9fbfee70e275 -->

<!-- START_2c5960c87277530a75d033750aa3414b -->
## User sign

> Example request:

```bash
curl -X POST \
    "http://almosque.loc/api/v1/user/sign" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://almosque.loc/api/v1/user/sign"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/user/sign`


<!-- END_2c5960c87277530a75d033750aa3414b -->

<!-- START_61d093756c595974e9b8c8b9679f507d -->
## api/v1/user/confirm/{phone}
> Example request:

```bash
curl -X POST \
    "http://almosque.loc/api/v1/user/confirm/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://almosque.loc/api/v1/user/confirm/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/user/confirm/{phone}`


<!-- END_61d093756c595974e9b8c8b9679f507d -->

<!-- START_f710dc2a94800f8b9207b267b66b46a7 -->
## User sign-in

> Example request:

```bash
curl -X POST \
    "http://almosque.loc/api/v1/user/sign-in" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://almosque.loc/api/v1/user/sign-in"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/user/sign-in`


<!-- END_f710dc2a94800f8b9207b267b66b46a7 -->

<!-- START_0305a8236afc7c8a81c0a2b4872afbe6 -->
## User resend sms verification

> Example request:

```bash
curl -X POST \
    "http://almosque.loc/api/v1/user/resend" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://almosque.loc/api/v1/user/resend"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/user/resend`


<!-- END_0305a8236afc7c8a81c0a2b4872afbe6 -->

<!-- START_c17cc4a66193735517974f3c2cfc2ffd -->
## User get-me

> Example request:

```bash
curl -X GET \
    -G "http://almosque.loc/api/v1/user/get-me" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://almosque.loc/api/v1/user/get-me"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/v1/user/get-me`


<!-- END_c17cc4a66193735517974f3c2cfc2ffd -->

<!-- START_15a393ce2817e077820664e97b986c5c -->
## User registration complete

> Example request:

```bash
curl -X PUT \
    "http://almosque.loc/api/v1/user/register" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://almosque.loc/api/v1/user/register"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/v1/user/register`


<!-- END_15a393ce2817e077820664e97b986c5c -->

<!-- START_31f326ae27eb5409177a03e80aa04d00 -->
## User update

> Example request:

```bash
curl -X PUT \
    "http://almosque.loc/api/v1/user/update" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://almosque.loc/api/v1/user/update"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/v1/user/update`


<!-- END_31f326ae27eb5409177a03e80aa04d00 -->

<!-- START_a80346f1f4952b3c03b4b27d6cff3d5a -->
## User logout

> Example request:

```bash
curl -X POST \
    "http://almosque.loc/api/v1/user/logout" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://almosque.loc/api/v1/user/logout"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/user/logout`


<!-- END_a80346f1f4952b3c03b4b27d6cff3d5a -->

#general


<!-- START_c6c5c00d6ac7f771f157dff4a2889b1a -->
## _debugbar/open
> Example request:

```bash
curl -X GET \
    -G "http://almosque.loc/_debugbar/open" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://almosque.loc/_debugbar/open"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (404):

```json
{
    "message": ""
}
```

### HTTP Request
`GET _debugbar/open`


<!-- END_c6c5c00d6ac7f771f157dff4a2889b1a -->

<!-- START_7b167949c615f4a7e7b673f8d5fdaf59 -->
## Return Clockwork output

> Example request:

```bash
curl -X GET \
    -G "http://almosque.loc/_debugbar/clockwork/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://almosque.loc/_debugbar/clockwork/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (404):

```json
{
    "message": ""
}
```

### HTTP Request
`GET _debugbar/clockwork/{id}`


<!-- END_7b167949c615f4a7e7b673f8d5fdaf59 -->

<!-- START_01a252c50bd17b20340dbc5a91cea4b7 -->
## _debugbar/telescope/{id}
> Example request:

```bash
curl -X GET \
    -G "http://almosque.loc/_debugbar/telescope/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://almosque.loc/_debugbar/telescope/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (404):

```json
{
    "message": ""
}
```

### HTTP Request
`GET _debugbar/telescope/{id}`


<!-- END_01a252c50bd17b20340dbc5a91cea4b7 -->

<!-- START_5f8a640000f5db43332951f0d77378c4 -->
## Return the stylesheets for the Debugbar

> Example request:

```bash
curl -X GET \
    -G "http://almosque.loc/_debugbar/assets/stylesheets" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://almosque.loc/_debugbar/assets/stylesheets"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (404):

```json
{
    "message": ""
}
```

### HTTP Request
`GET _debugbar/assets/stylesheets`


<!-- END_5f8a640000f5db43332951f0d77378c4 -->

<!-- START_db7a887cf930ce3c638a8708fd1a75ee -->
## Return the javascript for the Debugbar

> Example request:

```bash
curl -X GET \
    -G "http://almosque.loc/_debugbar/assets/javascript" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://almosque.loc/_debugbar/assets/javascript"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (404):

```json
{
    "message": ""
}
```

### HTTP Request
`GET _debugbar/assets/javascript`


<!-- END_db7a887cf930ce3c638a8708fd1a75ee -->

<!-- START_0973671c4f56e7409202dc85c868d442 -->
## Forget a cache key

> Example request:

```bash
curl -X DELETE \
    "http://almosque.loc/_debugbar/cache/1/" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://almosque.loc/_debugbar/cache/1/"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE _debugbar/cache/{key}/{tags?}`


<!-- END_0973671c4f56e7409202dc85c868d442 -->

<!-- START_0c068b4037fb2e47e71bd44bd36e3e2a -->
## Authorize a client to access the user&#039;s account.

> Example request:

```bash
curl -X GET \
    -G "http://almosque.loc/oauth/authorize" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://almosque.loc/oauth/authorize"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET oauth/authorize`


<!-- END_0c068b4037fb2e47e71bd44bd36e3e2a -->

<!-- START_e48cc6a0b45dd21b7076ab2c03908687 -->
## Approve the authorization request.

> Example request:

```bash
curl -X POST \
    "http://almosque.loc/oauth/authorize" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://almosque.loc/oauth/authorize"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST oauth/authorize`


<!-- END_e48cc6a0b45dd21b7076ab2c03908687 -->

<!-- START_de5d7581ef1275fce2a229b6b6eaad9c -->
## Deny the authorization request.

> Example request:

```bash
curl -X DELETE \
    "http://almosque.loc/oauth/authorize" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://almosque.loc/oauth/authorize"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE oauth/authorize`


<!-- END_de5d7581ef1275fce2a229b6b6eaad9c -->

<!-- START_a09d20357336aa979ecd8e3972ac9168 -->
## Authorize a client to access the user&#039;s account.

> Example request:

```bash
curl -X POST \
    "http://almosque.loc/oauth/token" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://almosque.loc/oauth/token"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST oauth/token`


<!-- END_a09d20357336aa979ecd8e3972ac9168 -->

<!-- START_d6a56149547e03307199e39e03e12d1c -->
## Get all of the authorized tokens for the authenticated user.

> Example request:

```bash
curl -X GET \
    -G "http://almosque.loc/oauth/tokens" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://almosque.loc/oauth/tokens"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET oauth/tokens`


<!-- END_d6a56149547e03307199e39e03e12d1c -->

<!-- START_a9a802c25737cca5324125e5f60b72a5 -->
## Delete the given token.

> Example request:

```bash
curl -X DELETE \
    "http://almosque.loc/oauth/tokens/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://almosque.loc/oauth/tokens/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE oauth/tokens/{token_id}`


<!-- END_a9a802c25737cca5324125e5f60b72a5 -->

<!-- START_abe905e69f5d002aa7d26f433676d623 -->
## Get a fresh transient token cookie for the authenticated user.

> Example request:

```bash
curl -X POST \
    "http://almosque.loc/oauth/token/refresh" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://almosque.loc/oauth/token/refresh"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST oauth/token/refresh`


<!-- END_abe905e69f5d002aa7d26f433676d623 -->

<!-- START_babcfe12d87b8708f5985e9d39ba8f2c -->
## Get all of the clients for the authenticated user.

> Example request:

```bash
curl -X GET \
    -G "http://almosque.loc/oauth/clients" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://almosque.loc/oauth/clients"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET oauth/clients`


<!-- END_babcfe12d87b8708f5985e9d39ba8f2c -->

<!-- START_9eabf8d6e4ab449c24c503fcb42fba82 -->
## Store a new client.

> Example request:

```bash
curl -X POST \
    "http://almosque.loc/oauth/clients" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://almosque.loc/oauth/clients"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST oauth/clients`


<!-- END_9eabf8d6e4ab449c24c503fcb42fba82 -->

<!-- START_784aec390a455073fc7464335c1defa1 -->
## Update the given client.

> Example request:

```bash
curl -X PUT \
    "http://almosque.loc/oauth/clients/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://almosque.loc/oauth/clients/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT oauth/clients/{client_id}`


<!-- END_784aec390a455073fc7464335c1defa1 -->

<!-- START_1f65a511dd86ba0541d7ba13ca57e364 -->
## Delete the given client.

> Example request:

```bash
curl -X DELETE \
    "http://almosque.loc/oauth/clients/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://almosque.loc/oauth/clients/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE oauth/clients/{client_id}`


<!-- END_1f65a511dd86ba0541d7ba13ca57e364 -->

<!-- START_9e281bd3a1eb1d9eb63190c8effb607c -->
## Get all of the available scopes for the application.

> Example request:

```bash
curl -X GET \
    -G "http://almosque.loc/oauth/scopes" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://almosque.loc/oauth/scopes"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET oauth/scopes`


<!-- END_9e281bd3a1eb1d9eb63190c8effb607c -->

<!-- START_9b2a7699ce6214a79e0fd8107f8b1c9e -->
## Get all of the personal access tokens for the authenticated user.

> Example request:

```bash
curl -X GET \
    -G "http://almosque.loc/oauth/personal-access-tokens" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://almosque.loc/oauth/personal-access-tokens"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET oauth/personal-access-tokens`


<!-- END_9b2a7699ce6214a79e0fd8107f8b1c9e -->

<!-- START_a8dd9c0a5583742e671711f9bb3ee406 -->
## Create a new personal access token for the user.

> Example request:

```bash
curl -X POST \
    "http://almosque.loc/oauth/personal-access-tokens" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://almosque.loc/oauth/personal-access-tokens"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST oauth/personal-access-tokens`


<!-- END_a8dd9c0a5583742e671711f9bb3ee406 -->

<!-- START_bae65df80fd9d72a01439241a9ea20d0 -->
## Delete the given token.

> Example request:

```bash
curl -X DELETE \
    "http://almosque.loc/oauth/personal-access-tokens/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://almosque.loc/oauth/personal-access-tokens/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE oauth/personal-access-tokens/{token_id}`


<!-- END_bae65df80fd9d72a01439241a9ea20d0 -->

<!-- START_f71d42906b47ab713f8411c8c493e506 -->
## api/v1/admin/translations/list
> Example request:

```bash
curl -X GET \
    -G "http://almosque.loc/api/v1/admin/translations/list" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://almosque.loc/api/v1/admin/translations/list"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/v1/admin/translations/list`


<!-- END_f71d42906b47ab713f8411c8c493e506 -->

<!-- START_faba903175f32ab4415c8acfe893a08e -->
## api/v1/admin/translations/list
> Example request:

```bash
curl -X POST \
    "http://almosque.loc/api/v1/admin/translations/list" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://almosque.loc/api/v1/admin/translations/list"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/admin/translations/list`


<!-- END_faba903175f32ab4415c8acfe893a08e -->

<!-- START_e4b1c038cef3e5bbf06f5d11b70fee83 -->
## api/v1/translations/translation/{language}
> Example request:

```bash
curl -X GET \
    -G "http://almosque.loc/api/v1/translations/translation/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://almosque.loc/api/v1/translations/translation/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/v1/translations/translation/{language}`


<!-- END_e4b1c038cef3e5bbf06f5d11b70fee83 -->

<!-- START_cb10488f39df33f9ecdaf78061412724 -->
## api/v1/translations/translation/{language}
> Example request:

```bash
curl -X POST \
    "http://almosque.loc/api/v1/translations/translation/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://almosque.loc/api/v1/translations/translation/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/translations/translation/{language}`


<!-- END_cb10488f39df33f9ecdaf78061412724 -->

<!-- START_56b41197ebd28a5defa525447e06ea99 -->
## api/v1/translations/translation
> Example request:

```bash
curl -X POST \
    "http://almosque.loc/api/v1/translations/translation" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://almosque.loc/api/v1/translations/translation"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/translations/translation`


<!-- END_56b41197ebd28a5defa525447e06ea99 -->

<!-- START_ea94c0913f19e66371e9ea92fd5ac136 -->
## translations
> Example request:

```bash
curl -X GET \
    -G "http://almosque.loc/translations" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://almosque.loc/translations"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET translations`


<!-- END_ea94c0913f19e66371e9ea92fd5ac136 -->


