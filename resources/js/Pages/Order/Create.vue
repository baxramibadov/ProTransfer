<template>
    <div class="order-form">
      <h2>Yeni Transfer Sifarişi</h2>
      <form @submit.prevent="submit">
        <div>
          <label>Başlanğıc Məkan:</label>
          <input v-model="form.start_location" placeholder="Başlanğıc nöqtə" />
        </div>
        <div>
          <label>Son Məkan:</label>
          <input v-model="form.end_location" placeholder="Son nöqtə" />
        </div>
        <div>
          <label>Avtomobil Növü:</label>
          <select v-model="form.car_type">
            <option value="sedan">Sedan</option>
            <option value="minivan">Minivan</option>
            <option value="vip">VIP</option>
          </select>
        </div>
        <div>
          <label>Götürülmə Tarixi və Saatı:</label>
          <input v-model="form.pickup_time" type="datetime-local" />
        </div>
        <button type="submit">Sifarişi Yarat</button>
      </form>
    </div>
  </template>
  
  <script>
  import { Inertia } from '@inertiajs/inertia';
  
  export default {
    data() {
      return {
        form: {
          start_location: '',
          end_location: '',
          car_type: 'sedan',
          pickup_time: '',
        },
      };
    },
    methods: {
      submit() {
        Inertia.post('/orders', this.form);
      },
    },
  };
  </script>
  
  <style>
  .order-form {
    max-width: 400px;
    margin: auto;
    padding: 20px;
    border: 1px solid #ddd;
    border-radius: 5px;
  }
  </style>
  