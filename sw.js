const CACHE_NAME = "codepolitan-reader-lite-v1";

var urlsToCache = [
    "/maouchan-shop/index.php",

];

self.addEventListener("install", function (event) {
    console.log("ServiceWorker: Menginstall..");

    event.waitUntil(
        caches.open(CACHE_NAME).then(function (cache) {
            console.log("ServiceWorker: Membuka cache..");
            return cache.addAll(urlsToCache);
        })
    );
});