# NGINX

---

## Blocking application and circuit files

```xml
    location ~ (myfuses.xml|circuit.xml) {
            return 404;
    }
``` 
