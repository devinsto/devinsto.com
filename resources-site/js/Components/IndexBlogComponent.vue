<template>
    <div class="container mx-auto py-10">
      <h1 class="mb-6 text-center text-4xl font-bold">Articles de Blog</h1>
  
      <div v-if="posts.length" class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3">
        <div 
          v-for="post in posts" 
          :key="post.id" 
          class="rounded-lg border p-4 shadow transition-shadow hover:shadow-lg"
        >
          <img 
            v-if="post.image_url" 
            :src="post.image_url" 
            alt="Image de l'article" 
            class="h-40 w-full rounded-t-lg object-cover"
          />
          <div class="mt-4">
            <h2 class="mb-2 text-2xl font-semibold">{{ post.title }}</h2>
            <p class="text-sm text-gray-600">{{ post.excerpt || 'Aucune description disponible.' }}</p>
            <a 
              :href="`/blog/${post.id}`" 
              class="mt-4 inline-block text-blue-600 hover:underline"
            >
              Lire la suite →
            </a>
          </div>
        </div>
      </div>
  
      <p v-else class="text-center text-gray-500">Aucun article disponible pour le moment.</p>
    </div>
  </template>
  
  <script setup>
 
  
  // Props passées depuis Laravel via Inertia.js
  defineProps({
    posts: {
      type: Array,
      required: true,
      default: () => [],
    },
  })
  </script>
  
  <style scoped>
  .container {
    max-width: 1200px;
  }
  </style>
  