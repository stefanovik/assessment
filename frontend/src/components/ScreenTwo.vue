<template>
  <div>
    <input
        v-model="searchQuery"
        type="text"
        placeholder="Search..."
        class="border p-2 w-full mb-4"
        @keyup.enter="performSearch"
    />

    <p v-if="loading">Loading...</p>
    <p v-else>{{ data }}</p>
  </div>
</template>

<script>
import { ref, onMounted } from 'vue';
import {performPesxelSearch} from "@/services/pexelService";

export default {
  setup() {
    const data = ref('');
    const loading = ref(true);
    const searchQuery = ref('');
    // const page = ref(1);

    const fetchData = async () => {
      await performPesxelSearch(searchQuery)
    }

    const performSearch = () => {
      if (searchQuery.value === '') {
        fetchData();
      } else {
        fetchData(searchQuery.value);
      }
    };

    onMounted(async () => {
      try {
        const response = await fetch('http://127.0.0.1:8000/api/screen-two');
        const result = await response.json();
        data.value = result.data;
      } catch (error) {
        data.value = 'Error fetching data';
      } finally {
        loading.value = false;
      }
    });

    return { searchQuery, performSearch, data, loading };
  }
};
</script>
