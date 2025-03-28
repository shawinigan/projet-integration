<template>
  <div class="mx-auto w-full p-6 sm:w-3/4 xl:w-1/2">
    {{ message }}
    <test :is-down="false"></test>
  </div>
</template>

<script>
  import Test from '../components/Test.vue';

  export default {
    components: {
      Test
    },
    data() {
      return {
        message: 'Example to call child component.'
      };
    }
  };
</script>
