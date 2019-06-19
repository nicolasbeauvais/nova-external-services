<template>
  <div v-if="serviceCategories">
    <div
      v-for="(services, category) in serviceCategories"
      :key="category"
    >
      <heading
        class="my-6"
        v-html="category"
      />

      <div class="flex">
        <a
          v-for="(service, index) in services"
          :key="index"
          :href="service.url"
          target="_blank"
          class="w-1/4 p-2 no-underline"
        >
          <card class="p-3">
            <h3
              style="color:#000000;"
              v-html="service.name"
            />
            <p
              style="color:#111111;"
              v-html="service.description"
            />
          </card>
        </a>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data () {
    return {
      serviceCategories: null,
    }
  },

  mounted() {
    this.getExternalServices();
  },

  methods: {
    getExternalServices() {
      Nova.request()
        .get('/nova-vendor/external-services/')
        .then(response => {
          if (response.data) {
            this.serviceCategories = response.data;
          }
        })
    },
  }
}
</script>
