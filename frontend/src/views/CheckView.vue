<template>
    <main class="flex-grow flex flex-col justify-center items-center">
        <div class="flex w-72 flex-col gap-6">
            <div class="relative h-10 w-full min-w-[200px]">
              <input
                class="peer h-full w-full rounded-[7px] border border-blue-gray-200 border-t-transparent bg-transparent px-3 py-2.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 focus:border-2 focus:border-green-500 focus:border-t-transparent focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"
                placeholder=" "
                id="site_id"
                name="site_id"
                type="text"
                ref="site_id"
              />
              <label class="before:content[' '] after:content[' '] pointer-events-none absolute left-0 -top-1.5 flex h-full w-full select-none text-[11px] font-normal leading-tight text-blue-gray-400 transition-all before:pointer-events-none before:mt-[6.5px] before:mr-1 before:box-border before:block before:h-1.5 before:w-2.5 before:rounded-tl-md before:border-t before:border-l before:border-blue-gray-200 before:transition-all after:pointer-events-none after:mt-[6.5px] after:ml-1 after:box-border after:block after:h-1.5 after:w-2.5 after:flex-grow after:rounded-tr-md after:border-t after:border-r after:border-blue-gray-200 after:transition-all peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[3.75] peer-placeholder-shown:text-blue-gray-500 peer-placeholder-shown:before:border-transparent peer-placeholder-shown:after:border-transparent peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-green-500 peer-focus:before:border-t-2 peer-focus:before:border-l-2 peer-focus:before:border-green-500 peer-focus:after:border-t-2 peer-focus:after:border-r-2 peer-focus:after:border-green-500 peer-disabled:text-transparent peer-disabled:before:border-transparent peer-disabled:after:border-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500">
                SITE ID
              </label>
            </div>
          </div>
          <div class="flex flex-row mt-5">
            <button
              class="middle none center mr-3 rounded-lg border border-green-500 py-3 px-6 font-sans text-xs font-bold uppercase text-green-500 transition-all hover:opacity-75 focus:ring focus:ring-green-200 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
              data-ripple-dark="true"
              @click="usersCheck"
            >
              Check Number of Users
            </button>
            <div>
                <p class="text text-green-500 mt-2 ml-10">{{ usersResult }} </p>
            </div>
          </div>
          <div class="flex flex-row mt-5">
            <button
              class="middle none center mr-3 rounded-lg border border-green-500 py-3 px-6 font-sans text-xs font-bold uppercase text-green-500 transition-all hover:opacity-75 focus:ring focus:ring-green-200 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
              data-ripple-dark="true"
              @click="crossCheck"
            >
              Check Cross-Feeder
            </button>
            <div>
                <div v-if="crossResult=='nok'">
                    <p class="text text-green-500 mt-2 ml-10">Not Okay</p>
                </div>
                <div v-else-if="crossResult=='ok'">
                    <p class="text text-green-500 mt-2 ml-10">Okay</p>
                </div>
            </div>
          </div>
          <div class="flex flex-row mt-5">
            <button
              class="middle none center mr-3 rounded-lg border border-green-500 py-3 px-6 font-sans text-xs font-bold uppercase text-green-500 transition-all hover:opacity-75 focus:ring focus:ring-green-200 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
              data-ripple-dark="true"
              @click="tmaCheck"
            >
              Check TMA
            </button>
            <div>
                <div v-if="tmaResult=='nok'">
                    <p class="text text-green-500 mt-2 ml-10">Not Okay</p>
                </div>
                <div v-else-if="tmaResult=='ok'">
                    <p class="text text-green-500 mt-2 ml-10">Okay</p>
                </div>
            </div>
          </div>
          <div class="flex flex-row mt-5">
            <button
              class="middle none center mr-3 rounded-lg border border-green-500 py-3 px-6 font-sans text-xs font-bold uppercase text-green-500 transition-all hover:opacity-75 focus:ring focus:ring-green-200 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
              data-ripple-dark="true"
              @click="interfenceCheck"
            >
              Check Interference
            </button>
            <div>
                <div v-if="interferenceResult=='nok'">
                    <p class="text text-green-500 mt-2 ml-10">Not Okay</p>
                </div>
                <div v-else-if="interferenceResult=='ok'">
                    <p class="text text-green-500 mt-2 ml-10">Okay</p>
                </div>
            </div>


          </div>
    </main>
</template>

<script>

import axios from 'axios';

    export default {
        data() {
            return {
            usersResult: null,
            tmaResult: null,
            crossResult: null,
            interferenceResult: null,
            };
        },
        methods: {
            interfenceCheck() {
                // Access the input field value using the ref
                const site_id = this.$refs.site_id.value;

                // Do something with the input value (e.g., log it)
                axios.get('http://localhost:8000/api/interference/'+site_id)
                .then(response => {
                // Handle the response data
                this.interferenceResult = response.data;
                })
                .catch(error => {
                // Handle errors, if any
                console.error(error);
                });
            },
            usersCheck() {
                // Access the input field value using the ref
                const site_id = this.$refs.site_id.value;

                // Do something with the input value (e.g., log it)
                axios.get('http://localhost:8000/api/users/'+site_id)
                .then(response => {
                // Handle the response data
                this.usersResult = response.data;
                })
                .catch(error => {
                // Handle errors, if any
                console.error(error);
                });
            },
            tmaCheck() {
                // Access the input field value using the ref
                const site_id = this.$refs.site_id.value;

                // Do something with the input value (e.g., log it)
                axios.get('http://localhost:8000/api/tma/'+site_id)
                .then(response => {
                // Handle the response data
                this.tmaResult = response.data;
                })
                .catch(error => {
                // Handle errors, if any
                console.error(error);
                });
            },
            crossCheck() {
                // Access the input field value using the ref
                const site_id = this.$refs.site_id.value;

                // Do something with the input value (e.g., log it)
                axios.get('http://localhost:8000/api/cross/'+site_id)
                .then(response => {
                // Handle the response data
                this.crossResult = response.data;
                })
                .catch(error => {
                // Handle errors, if any
                console.error(error);
                });
            },
        },
    };
</script>
