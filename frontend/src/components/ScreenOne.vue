<template>
  <div>
    <input
        v-model="searchQuery"
        type="text"
        placeholder="Search..."
        class="border p-2 w-full mb-4"
        @keyup="handleTyping"
        @keyup.enter="performSearch"
    />

    <p v-if="loading">Loading...</p>
    <table v-else class="w-full border-collapse border border-gray-300" style="margin-left: 15rem; margin-top: 2rem;min-width: 50rem;">
      <thead class="bg-gray-200">
      <tr>
        <th class="border border-gray-300 p-2 text-left">ID</th>
        <th class="border border-gray-300 p-2 text-left">Title</th>
        <th class="border border-gray-300 p-2 text-left">Status</th>
        <th class="border border-gray-300 p-2 text-left">Notes</th>
      </tr>
      </thead>
      <tbody>
      <tr v-for="item in data" :key="item.id" class="hover:bg-gray-100">
        <td class="border border-gray-300 p-2">{{ item.id }}</td>
        <td class="border border-gray-300 p-2">{{ item.title }}</td>
        <td class="border border-gray-300 p-2">{{ item.status }}</td>
        <td class="border border-gray-300 p-2 text-sm text-gray-500">{{ item.notes }}</td>
      </tr>
      </tbody>
    </table>
  </div>
</template>

<script>
import {onMounted, ref, watch} from 'vue';

export default {
  setup() {
    const data = ref([]);
    const searchQuery = ref('');
    const loading = ref(true);
    let debounceTimer = null;

    const fetchData = async (query = '') => {
      loading.value = true;
      try {
        const response = await fetch(`http://127.0.0.1:8000/api/screen-one?search=${query}`);
        data.value = await response.json();
      } catch (error) {
        console.error('Error fetching data:', error);
      } finally {
        loading.value = false;
      }
    };

    const performSearch = () => {
      if (searchQuery.value === '') {
        fetchData();
      } else {
        fetchData(searchQuery.value);
      }
    };

    const handleTyping = () => {
      if (debounceTimer) clearTimeout(debounceTimer);

      debounceTimer = setTimeout(() => {
        performSearch();
      }, 300);
    };

    watch(searchQuery, (newValue) => {
      if (newValue === '') {
        fetchData();
      }
    });

    onMounted(async () => {
      await fetchData();
    });

    return { searchQuery, handleTyping, performSearch, data, loading };
  }
};
</script>
