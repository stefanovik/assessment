<template>
  <div class="flex h-screen flex-row w-25" style="display: flex;flex-direction: row">
    <!-- Sidebar -->
    <div class="w-64 bg-gray-800 text-white p-4" style="width: 15%">
      <h2 class="text-lg font-bold">Sidebar</h2>
      <ul class="mt-4 space-y-2" style="width: 7rem;">
        <li><router-link to="/screen-one" class="block hover:text-gray-300">Screen One</router-link></li>
        <li><router-link to="/screen-two" class="block hover:text-gray-300">Screen Two</router-link></li>
        <li><router-link to="/screen-three" class="block hover:text-gray-300">Screen Three</router-link></li>
      </ul>
    </div>

    <!-- Main Content -->
    <main class="flex-1 p-6 bg-gray-100" style="width: 85%">
      <router-view></router-view>
    </main>
  </div>
</template>

<script>
export default {
  name: "MainLayout",
};
</script>
