<template>

    <nav class="bg-green-400">
        <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
          <div class="relative flex h-16 items-center justify-between">
            <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
              <!-- Mobile menu button-->
              <button type="button" class="inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <!--
                  Icon when menu is closed.

                  Menu open: "hidden", Menu closed: "block"
                -->
                <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
                <!--
                  Icon when menu is open.

                  Menu open: "block", Menu closed: "hidden"
                -->
                <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
              </button>
            </div>
            <div class="flex items-center justify-between sm:items-stretch sm:justify-start">
              <div class="flex items-center">
                <img alt="Vue logo" class="logo" src="@/assets/glo.png" width="50" height="50" />
              </div>
              <div class=" hidden sm:ml-6 sm:block">
                <div class="flex space-x-4">
                  <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                  <RouterLink to="/" class="text-gray-100 hover:bg-green-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Dashboard</RouterLink>
                  <RouterLink to="/users" class="text-gray-100 hover:bg-green-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Number of Users</RouterLink>
                  <RouterLink to="/interference" class="text-gray-100 hover:bg-green-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Interference</RouterLink>
                  <RouterLink to="/cross" class="text-gray-100 hover:bg-green-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Cross Feeder Check</RouterLink>
                  <RouterLink to="/tma" class="text-gray-100 hover:bg-green-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">TMA Check</RouterLink>
                  <router-link to="/check"
                    class="text-gray-100 hover:bg-green-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium"
                    >
                    Check Site
                </router-link>
                </div>
              </div>
            </div>

          </div>
        </div>

        <!-- Mobile menu, show/hide based on menu state. -->
        <div class="sm:hidden" id="mobile-menu">
          <div class="space-y-1 px-2 pb-3 pt-2">
            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
            <a href="#" class="bg-gray-900 text-white block rounded-md px-3 py-2 text-base font-medium" aria-current="page">Dashboard</a>
            <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Team</a>
            <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Projects</a>
            <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Calendar</a>
          </div>
        </div>
      </nav>

</template>

<script></script>

<style>
    .router-link-active {
        background-color: green; /* You can customize the active link styles here */
        color: white;
    }
</style>
