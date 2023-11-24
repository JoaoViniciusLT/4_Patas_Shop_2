<html>
  <head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
    <meta http-equiv='x-ua-compatible' content='ie=edge'>
  </head>
  <body>
    <div id='app'>
      <VCalendar />
      <VDatePicker v-model='selectedDate' />
    </div>

    <!-- Vue  -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <!-- VCalendar (automatically installed) -->
    <script src="https://unpkg.com/v-calendar"></script>

    <script>
      const { createApp } = Vue

      createApp({
        data() {
          return {
            selectedDate: null,
          }
        }
      }).mount('#app')
    </script>
  </body>
</html>