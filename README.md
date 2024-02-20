# Cryptocurrency-Api


## Getting started

1. Start docker-compose to build and start your environment:
```console
docker-compose up -d
```

2. After booting the container inter environment console:
```console
docker exec -it symfony-apache-php bash
```
3. Next step to make migration
```console
php bin/console make:migration
```
4. Final step to fill the database. It should be done by calling api [update method](#update-database)

## Available endpoints

### Update database 

```
PATCH -> http://localhost/api/cryptorate/{:currency}
```

**Path Parameters**
- currency 
> Requested exchange rates base (USD, EUR, GBP) ( _required_ )

**Query Parameters**
- start_date
>Timeseries starting time in ISO 8601 ( _required_ )
- end_date
>Timeseries starting time in ISO 8601 ( _required_ )


### Retrieving data
```
GET -> http://localhost/api/cryptorate/{:currency}
```
**Path Parameters**
- currency 
> Requested exchange rates base (USD, EUR, GBP) ( _required_ )

**Query Parameters**
- start_date
>Timeseries starting time in ISO 8601 ( _optional_ )
- end_date
>Timeseries starting time in ISO 8601 ( _optional_ )
>
#### Example  
```
GET -> http://localhost/api/cryptorate/usd?start_date=2024-02-18T0:00:00&end_date=2024-02-20T00:00:00
```
## Test
Application test - [Postman JSON](API.postman_collection.json)
> Import this file into your Postman environment. This must be a desktop application or you must have Postman Agent installed to work correctly with localhost.
## Resources

- [CoinAPi](https://www.coinapi.io/market-data-api)
- [PHP container](https://gitlab.com/thomasd.codes/docker-symfony-stack)
