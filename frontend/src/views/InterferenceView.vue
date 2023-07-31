<template>
    <main class="flex-grow flex flex-col justify-center items-center">
        <div class="">
            <div v-if="responseData" class="items-center">
                <h1 class="text-center text-5xl text-green-400">SITES WITH INTERFERENCE ISSUES</h1>
                <h3 class=" text-center text-2xl text-green-400">Total Number of Sites: <strong>{{ responseData.length }}</strong></h3>

              <div class="flex flex-col">
                <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                  <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                    <div class="overflow-hidden">
                      <table class="min-w-full text-left text-sm font-light">
                        <thead class="border-b font-medium dark:border-neutral-500">
                          <tr>
                            <th scope="col" class="px-6 py-4">Site Id</th>
                            <th scope="col" class="px-6 py-4">Address</th>
                            <th scope="col" class="px-6 py-4">No of Users</th>
                            <th scope="col" class="px-6 py-4">Check Interference</th>
                            <th scope="col" class="px-6 py-4">Check TMA</th>
                            <th scope="col" class="px-6 py-4">Check Cross-Feeder</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr class="border-b dark:border-neutral-500" v-for="item in responseData" :key="item.id">
                            <td class="whitespace-nowrap px-6 py-4 font-medium">{{ item.site_id }}</td>
                            <td class="whitespace-nowrap px-6 py-4">{{ item.address}}</td>
                            <td class="whitespace-nowrap px-6 py-4">{{ item.users}}</td>
                            <td class="whitespace-nowrap px-6 py-4">{{ item.interference}}</td>
                            <td class="whitespace-nowrap px-6 py-4">{{ item.tma}}</td>
                            <td class="whitespace-nowrap px-6 py-4">{{ item.cross_feeder}}</td>
                          </tr>

                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div v-else>
              <!-- Show a loading message or spinner while data is being fetched -->
              Loading...
            </div>
          </div>
    </main>
</template>

<script>

import axios from 'axios';

export default {
  data() {
    return {
      responseData: null,
    };
  },
  mounted() {
    // Make the API call on component mount or whenever needed
    this.fetchData();
  },
  methods: {
    fetchData() {
      axios.get('http://localhost:8000/api/interference')
        .then(response => {
          // Handle the response data
          this.responseData = response.data;
        })
        .catch(error => {
          // Handle errors, if any
          console.error(error);
        });
    },

  },
};
</script>
