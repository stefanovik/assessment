<template>
  <div>
    <p v-if="loading">Loading...</p>
    <p v-else>{{ data }}</p>
  </div>
</template>

<script>
import { ref, onMounted } from 'vue';

export default {
  setup() {
    const data = ref('');
    const loading = ref(true);

    onMounted(async () => {
      try {
        const response = await fetch('http://127.0.0.1:8000/api/screen-three');
        const result = await response.json();
        data.value = result.data;
      } catch (error) {
        data.value = 'Error fetching data';
      } finally {
        loading.value = false;
      }
    });

    return { data, loading };
  }
};
</script>
