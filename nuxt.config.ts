// https://nuxt.com/docs/api/configuration/nuxt-config
export default defineNuxtConfig({
  compatibilityDate: '2024-04-03',
  devtools: { enabled: true },
  alias: {
    "@": "/",
    "@mixins": "/assets/scss/mixins",
    "public": "/public"
  },
  css: [
    './assets/scss/styles.scss',
  ],
  head: {
    "meta": [
      {
        "name": "viewport",
        "content": "width=device-width, initial-scale=1"
      },
      {
        "charset": "utf-8"
      }
    ],
    "link": [],
    "style": [],
    "script": [],
    "noscript": []
  },
  vite: {
    optimizeDeps: {
      include: ['sass']
    }
  }
})
