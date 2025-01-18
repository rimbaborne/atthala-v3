<template>
  <div class="space-y-2" v-for="(data, index) in pembayaranList" :key="index">
    <dl class="flex items-center justify-between gap-4">
      <dt class="text-base font-normal text-gray-500 dark:text-gray-400">
        <input
          type="checkbox"
          class="w-5 h-5"
          :class="data.disabled ? 'text-blue-300' : 'text-blue-600'"
          :name="data.name"
          v-model="form['pembayaran' + data.name]"
          :value="data.value"
          :id="data.name.toLowerCase()"
          :disabled="data.disabled"
          :required="data.required"
          :checked="data.checked"
        />
        <label :for="data.name.toLowerCase()" class="ms-2 text-sm font-medium text-gray-900">
          {{ data.label }}
          <span
            v-if="data.required"
            aria-hidden="true"
            class="text-red-600"
            title="This field is required"
          >*</span>
        </label>
      </dt>
      <dd class="text-base font-semibold text-gray-900 flex justify-between">
        <!-- <div class="mr-2">Rp</div> -->
        <div>{{ formatCurrency(data.value) }}</div>
      </dd>
    </dl>
  </div>
</template>

<script>
export default {
  data() {
    return {
      form: {},
      pembayaranList: [
        {
          name: 'pendaftaran',
          label: 'PENDAFTARAN',
          value: 100000,
          disabled: true,
          checked: true,
          required: true,
        },
        {
          name: 'spp1',
          label: 'SPP BULAN I',
          value: 100000,
          disabled: true,
          checked: true,
          required: true,
        },
        {
          name: 'spp2',
          label: 'SPP BULAN II',
          value: 100000,
          disabled: true,
          checked: true,
          required: true,
        },
        {
          name: 'spp3',
          label: 'SPP BULAN III',
          value: 100000,
          disabled: false,
          checked: false,
          required: false,
        },
        {
          name: 'spp4',
          label: 'SPP BULAN IV',
          value: 100000,
          disabled: false,
          checked: false,
          required: false,
        },
      ],
    };
  },
  mounted() {
    // Initialize the form model with default values
    this.pembayaranList.forEach((item) => {
      this.form['pembayaran' + item.name] = item.checked;
    });
  },
  methods: {
    formatCurrency(value) {
      return new Intl.NumberFormat('id-ID', {
        style: 'currency',
        currency: 'IDR',
      }).format(value);
    },
  },
};
</script>

<style scoped>
.w-5 {
  width: 1.25rem;
  height: 1.25rem;
}
</style>

