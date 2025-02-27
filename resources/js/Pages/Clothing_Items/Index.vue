<template>
  <div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">My Wardrobe</h1>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
      <div v-for="item in clothing_Items" :key="item.id" class="border p-4 rounded-lg shadow">
        <img :src="item.image_url || 'https://via.placeholder.com/150'" alt="Clothing_Item" class="w-full h-48 object-cover mb-4">
        <h2 class="text-xl font-semibold">{{ item.name }}</h2>
        <p class="text-gray-600">{{ item.category }}</p>
        <p class="text-gray-500">{{ item.description }}</p>
        <div class="mt-4 flex space-x-2">
          <button @click="editItem(item)" class="bg-blue-500 text-white px-4 py-2 rounded">Edit</button>
          <button @click="deleteItem(item)" class="bg-red-500 text-white px-4 py-2 rounded">Delete</button>
        </div>
      </div>
    </div>
    <button @click="showAddModal = true" class="mt-4 bg-green-500 text-white px-4 py-2 rounded">Add Item</button>

    <!-- Add/Edit Modal -->
    <div v-if="showAddModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center">
      <div class="bg-white p-6 rounded-lg w-1/3">
        <h2 class="text-xl font-bold mb-4">{{ editingItem ? 'Edit Item' : 'Add Item' }}</h2>
        <form @submit.prevent="editingItem ? updateItem() : addItem()">
          <input v-model="form.name" placeholder="Name" class="w-full p-2 border rounded mb-2">
          <input v-model="form.category" placeholder="Category" class="w-full p-2 border rounded mb-2">
          <textarea v-model="form.description" placeholder="Description" class="w-full p-2 border rounded mb-2"></textarea>
          <input v-model="form.image_url" placeholder="Image URL" class="w-full p-2 border rounded mb-2">
          <div class="flex justify-end space-x-2">
            <button type="button" @click="showAddModal = false" class="bg-gray-500 text-white px-4 py-2 rounded">Cancel</button>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">{{ editingItem ? 'Update' : 'Add' }}</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</template>

<script setup>
import { ref, onMounted } from 'vue';
import axios from 'axios';

const clothing_Items = ref([]);
const showAddModal = ref(false);
const editingItem = ref(null);
const form = ref({
  name: '',
  category: '',
  description: '',
  image_url: '',
});

const fetchItems = async () => {
  const response = await axios.get('/api/clothing-items', {
    headers: {
      Authorization: `Bearer ${localStorage.getItem('token')}`,
    },
  });
  clothing_Items.value = response.data;
};

const addItem = async () => {
  await axios.post('/api/clothing-items', form.value, {
    headers: {
      Authorization: `Bearer ${localStorage.getItem('token')}`,
    },
  });
  showAddModal.value = false;
  fetchItems();
};

const editItem = (item) => {
  editingItem.value = item;
  form.value = { ...item };
  showAddModal.value = true;
};

const updateItem = async () => {
  await axios.put(`/api/clothing-items/${editingItem.value.id}`, form.value, {
    headers: {
      Authorization: `Bearer ${localStorage.getItem('token')}`,
    },
  });
  showAddModal.value = false;
  fetchItems();
};

const deleteItem = async (item) => {
  await axios.delete(`/api/clothing-items/${item.id}`, {
    headers: {
      Authorization: `Bearer ${localStorage.getItem('token')}`,
    },
  });
  fetchItems();
};

onMounted(() => {
  fetchItems();
});
</script>