<template>
  <div
    class="flex items-center rounded-lg bg-white from-gray-700/50 via-transparent px-6 py-4
      shadow-2xl shadow-gray-500/20 focus:outline-2 focus:outline-red-500">
    <div class="relative flex h-3 w-3">
      <span
        id="status-pulse"
        class="absolute inline-flex h-full w-full animate-ping rounded-full opacity-75"
        :class="statusColor" />
      <span
        id="status-dot"
        class="relative inline-flex h-3 w-3 rounded-full"
        :class="statusColor" />
    </div>
    <div class="ml-6">
      <h2 class="text-xl font-semibold text-gray-900">{{ status }}</h2>
      <p class="mt-2 text-sm leading-relaxed text-gray-500 dark:text-gray-400">
        {{ message }} {{ apiResponse }}
      </p>
    </div>
  </div>
</template>

<script>
  export default {
    data() {
      return {
        status: 'Application up',
        message: 'HTTP request received. Response rendered in 120ms.',
        apiResponse: null
      };
    },
    props: {
      isDown: {
        type: Boolean,
        default: false
      }
    },
    computed: {
      statusColor() {
        return this.isDown ? 'bg-red-600' : 'bg-green-400';
      }
    },
    watch: {
      isDown(newValue) {
        this.status = newValue ? 'Application down' : 'Application up';
        this.message = newValue
          ? 'Application is currently unavailable.'
          : 'HTTP request received. Response rendered in 120ms.';
      }
    },
    created() {
      this.callApi();
    },
    methods: {
      // Simulate an API call with full axios support
      // TODO: Explore how to use axios and all its features
      callApi() {
        this.$axios
          .get('/test')
          .then((response) => {
            this.apiResponse = response.data.message;
          })
          .catch((error) => {
            console.error('API error: ', error);
            this.apiResponse = error.response.data.message;
          })
          .finally(() => {
            console.log('API call completed.');
          });
      }
    }
  };
</script>
