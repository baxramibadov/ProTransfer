<template>
    <div>
      <h2>Mövcud Sifarişlər</h2>
      <ul>
        <li v-for="order in orders" :key="order.id">
          {{ order.start_location }} ➔ {{ order.end_location }} - {{ order.status }}
        </li>
      </ul>
    </div>
  </template>
  
  <script>
  export default {
    props: {
      orders: Array,
    },
  };
  </script>
  