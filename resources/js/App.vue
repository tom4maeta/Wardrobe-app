<template>
  <div>
    <nav class="bg-blue-500 p-4">
      <div class="container mx-auto flex justify-between items-center">
        <router-link to="/" class="text-white text-xl font-bold">Wardrobe App</router-link>
        <div>
          <router-link to="/login" class="text-white mr-4" v-if="!isAuthenticated">Login</router-link>
          <router-link to="/register" class="text-white mr-4" v-if="!isAuthenticated">Register</router-link>
          <button @click="logout" class="text-white" v-if="isAuthenticated">Logout</button>
        </div>
      </div>
    </nav>
    <router-view></router-view>
  </div>
</template>

<script setup>
import { computed } from 'vue';
import { useRouter } from 'vue-router';
import axios from 'axios';

const router = useRouter();

const isAuthenticated = computed(() => {
  return localStorage.getItem('token') !== null;
});

const logout = async () => {
  await axios.post('/logout');
  localStorage.removeItem('token');
  router.push('/login');
};
</script>