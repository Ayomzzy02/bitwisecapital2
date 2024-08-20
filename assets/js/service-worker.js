const filesToCache = [
    '/',
    '/about',
    '/contact',
    '/packages',
    '/faq',
    '/terms',
    '/login',
    '/register',
    '/password/reset',
    '/assets/images/favicon.png',
    '/assets/images/pp.jpg',
    '/assets/css/style.css',
    '/assets/css/bootstrap.min.css',
    '/assets/css/font-awesome.min.css',
    '/assets/css/skins/blue.css',
    '/assets/js/jquery-3.5.1.min.js',
    '/assets/js/bootstrap.min.js',
    '/assets/js/owl.carousel.js',
    '/assets/js/custom.js',
    '/atlantis/css/atlantis.min.css',
    '/atlantis/style.css',
    '/atlantis/js/atlantis.min.js',
    '/atlantis/main.js',
    '/atlantis/js/moment.js',
    '/manifest.json',
    '/service-worker.js'
  ];
  
  
  const staticCacheName = 'pages-cache-v2';
  
  self.addEventListener('install', event => {
    console.log('Attempting to install service worker and cache static assets');
    event.waitUntil(
      caches.open(staticCacheName)
      .then(cache => {
        return cache.addAll(filesToCache);
      })
    );
  });
  
  // activate event
  self.addEventListener('activate', event => {
    event.waitUntil(
      caches.keys().then(keys => {
        return Promise.all(keys
          .filter(key => key !== staticCacheName)
          .map(key => caches.delete(key))
        );
      })
    );
  });
  // fetch event
  self.addEventListener('fetch', event => {
    event.respondWith(
      caches.match(event.request).then(cacheRes => {
        return cacheRes || fetch(event.request);
      })
    );
  });