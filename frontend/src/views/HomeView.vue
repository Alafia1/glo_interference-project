<script>
    import axios from 'axios';

export default {
  data() {
    return {
      responseData: null,
      userThreshold: 0,
      tmaThreshold: 0,
      crossThreshold: 0,
      interferenceThreshold: 0,
    };
  },
  mounted() {
    // Make the API call on component mount or whenever needed
    this.fetchData();
  },
  methods: {
    fetchData() {
      axios.get('http://localhost:8000/api/data')
        .then(response => {
          // Handle the response data
          this.responseData = response.data;
            this.userThreshold = userFunc(response.data);
            this.tmaThreshold = tmaFunc(response.data);
            this.crossThreshold = crossFunc(response.data);
            this.interferenceThreshold = interferenceFunc(response.data);
        })
        .catch(error => {
          // Handle errors, if any
          console.error(error);
        });
    },

  },
};

function userFunc(data){
    var count = 0;
    for (const obj of data){
        if (obj.users > 100){
            count++;
        }
    }
    return count;
}

function tmaFunc(data){
    var count = 0;
    for (const obj of data){
        if (obj.tma == 'nok'){
            count++;
        }
    }
    return count;
}

function crossFunc(data){
    var count = 0;
    for (const obj of data){
        if (obj.cross_feeder == 'nok'){
            count++;
        }
    }
    return count;
}

function interferenceFunc(data){
    var count = 0;
    for (const obj of data){
        if (obj.cross_feeder == 'nok'){
            count++;
        }
    }
    return count;
}


</script>

<template>
  <main class="flex-grow flex justify-center items-center">
    <div class="">
        <div v-if="responseData" class="">

            <h1>Total Number of Sites: <strong>{{ responseData.length }}</strong></h1>
            <h1>Total Number of Sites where Number of Users exceed threshold: <strong>{{ userThreshold }}</strong></h1>
            <h1>Total Number of Sites where TMA Not Okay: <strong>{{ tmaThreshold }}</strong></h1>
            <h1>Total Number of Sites where Cross-Feeder Not Okay: <strong>{{ crossThreshold }}</strong></h1>
            <h1>Total Number of Sites where Interference Not Okay: <strong>{{ interferenceThreshold }}</strong></h1>

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
                        <th scope="col" class="px-6 py-4">Check TMA</th>
                        <th scope="col" class="px-6 py-4">Check Cross-Feeder</th>
                        <th scope="col" class="px-6 py-4">Check Interference</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr class="border-b dark:border-neutral-500" v-for="item in responseData" :key="item.id">
                        <td class="whitespace-nowrap px-6 py-4 font-medium">{{ item.site_id }}</td>
                        <td class="whitespace-nowrap px-6 py-4">{{ item.address}}</td>
                        <td class="whitespace-nowrap px-6 py-4">{{ item.users}}</td>
                        <td class="whitespace-nowrap px-6 py-4">{{ item.tma}}</td>
                        <td class="whitespace-nowrap px-6 py-4">{{ item.cross_feeder}}</td>
                        <td class="whitespace-nowrap px-6 py-4">{{ item.interference}}</td>
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
