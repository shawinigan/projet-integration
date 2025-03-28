<template>
  <div>
    {{ message }}
    <router-view></router-view>
  </div>
</template>

<script>
  export default {
    data() {
      return {
        message: 'Main component for vue-router as SPA.'
      };
    }
  };
</script>
