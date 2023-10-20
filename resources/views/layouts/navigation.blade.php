    <nav class="fixed top-0 z-50 w-full bg-white border-b border-gray-200 dark:bg-gray-800 dark:border-gray-700">
        <div class="px-3 py-3 lg:px-5 lg:pl-3">
            <div class="flex items-center justify-between">
                <div class="flex items-center justify-start">
                    <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
                        <span class="sr-only">Open sidebar</span>
                        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
                        </svg>
                    </button>
                    <a href="{{ route('dashboard') }}" class="flex ml-2 md:mr-24">
                        <img src="data:image/png;base64,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" class="h-8 mr-3" alt="Wsuit360 Logo" />
                        <span class="self-center text-xl font-semibold sm:text-2xl whitespace-nowrap dark:text-white">Wsuit360</span>
                    </a>
                </div>
                <div class="flex items-center">
                    <div class="flex items-center ml-3">
                        <div>
                            <button type="button" class="flex text-sm bg-gray-800 rounded-full focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" aria-expanded="false" data-dropdown-toggle="dropdown-user">
                                <span class="sr-only">Open user menu</span>
                                <img class="w-8 h-8 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" alt="user photo">
                            </button>
                        </div>
                        <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow dark:bg-gray-700 dark:divide-gray-600" id="dropdown-user">
                            <div class="px-4 py-3" role="none">
                                <p class="text-sm text-gray-900 dark:text-white" role="none">
                                    Neil Sims
                                </p>
                                <p class="text-sm font-medium text-gray-900 truncate dark:text-gray-300" role="none">
                                    neil.sims@flowbite.com
                                </p>
                            </div>
                            <ul class="py-1" role="none">
                                <li>
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Dashboard</a>
                                </li>
                                <li>
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Settings</a>
                                </li>
                                <li>
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Earnings</a>
                                </li>
                                <li>
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Sign out</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700" aria-label="Sidebar">
        <div class="h-full px-3 pb-4 overflow-y-auto bg-white dark:bg-gray-800">
            <ul class="space-y-2 font-medium">
                <li>
                    <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <svg class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 21">
                            <path d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z" />
                            <path d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z" />
                        </svg>
                        <span class="ml-3">Dashboard</span>
                    </a>
                </li>
                <li>
                    <button type="button" class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
                        <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 21">
                            <path d="M15 12a1 1 0 0 0 .962-.726l2-7A1 1 0 0 0 17 3H3.77L3.175.745A1 1 0 0 0 2.208 0H1a1 1 0 0 0 0 2h.438l.6 2.255v.019l2 7 .746 2.986A3 3 0 1 0 9 17a2.966 2.966 0 0 0-.184-1h2.368c-.118.32-.18.659-.184 1a3 3 0 1 0 3-3H6.78l-.5-2H15Z" />
                        </svg>
                        <span class="flex-1 ml-3 text-left whitespace-nowrap">E-commerce</span>
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                        </svg>
                    </button>
                    <ul id="dropdown-example" class="hidden py-2 space-y-2">
                        <li>
                            <a href="#" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Products</a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Billing</a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Invoice</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                            <path d="M6.143 0H1.857A1.857 1.857 0 0 0 0 1.857v4.286C0 7.169.831 8 1.857 8h4.286A1.857 1.857 0 0 0 8 6.143V1.857A1.857 1.857 0 0 0 6.143 0Zm10 0h-4.286A1.857 1.857 0 0 0 10 1.857v4.286C10 7.169 10.831 8 11.857 8h4.286A1.857 1.857 0 0 0 18 6.143V1.857A1.857 1.857 0 0 0 16.143 0Zm-10 10H1.857A1.857 1.857 0 0 0 0 11.857v4.286C0 17.169.831 18 1.857 18h4.286A1.857 1.857 0 0 0 8 16.143v-4.286A1.857 1.857 0 0 0 6.143 10Zm10 0h-4.286A1.857 1.857 0 0 0 10 11.857v4.286c0 1.026.831 1.857 1.857 1.857h4.286A1.857 1.857 0 0 0 18 16.143v-4.286A1.857 1.857 0 0 0 16.143 10Z" />
                        </svg>
                        <span class="flex-1 ml-3 whitespace-nowrap">Kanban</span>
                        <span class="inline-flex items-center justify-center px-2 ml-3 text-sm font-medium text-gray-800 bg-gray-100 rounded-full dark:bg-gray-700 dark:text-gray-300">Pro</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="m17.418 3.623-.018-.008a6.713 6.713 0 0 0-2.4-.569V2h1a1 1 0 1 0 0-2h-2a1 1 0 0 0-1 1v2H9.89A6.977 6.977 0 0 1 12 8v5h-2V8A5 5 0 1 0 0 8v6a1 1 0 0 0 1 1h8v4a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-4h6a1 1 0 0 0 1-1V8a5 5 0 0 0-2.582-4.377ZM6 12H4a1 1 0 0 1 0-2h2a1 1 0 0 1 0 2Z" />
                        </svg>
                        <span class="flex-1 ml-3 whitespace-nowrap">Inbox</span>
                        <span class="inline-flex items-center justify-center w-3 h-3 p-3 ml-3 text-sm font-medium text-blue-800 bg-blue-100 rounded-full dark:bg-blue-900 dark:text-blue-300">3</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                            <path d="M14 2a3.963 3.963 0 0 0-1.4.267 6.439 6.439 0 0 1-1.331 6.638A4 4 0 1 0 14 2Zm1 9h-1.264A6.957 6.957 0 0 1 15 15v2a2.97 2.97 0 0 1-.184 1H19a1 1 0 0 0 1-1v-1a5.006 5.006 0 0 0-5-5ZM6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z" />
                        </svg>
                        <span class="flex-1 ml-3 whitespace-nowrap">Users</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                            <path d="M17 5.923A1 1 0 0 0 16 5h-3V4a4 4 0 1 0-8 0v1H2a1 1 0 0 0-1 .923L.086 17.846A2 2 0 0 0 2.08 20h13.84a2 2 0 0 0 1.994-2.153L17 5.923ZM7 9a1 1 0 0 1-2 0V7h2v2Zm0-5a2 2 0 1 1 4 0v1H7V4Zm6 5a1 1 0 1 1-2 0V7h2v2Z" />
                        </svg>
                        <span class="flex-1 ml-3 whitespace-nowrap">Products</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 16">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 8h11m0 0L8 4m4 4-4 4m4-11h3a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-3" />
                        </svg>
                        <span class="flex-1 ml-3 whitespace-nowrap">Sign In</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M5 5V.13a2.96 2.96 0 0 0-1.293.749L.879 3.707A2.96 2.96 0 0 0 .13 5H5Z" />
                            <path d="M6.737 11.061a2.961 2.961 0 0 1 .81-1.515l6.117-6.116A4.839 4.839 0 0 1 16 2.141V2a1.97 1.97 0 0 0-1.933-2H7v5a2 2 0 0 1-2 2H0v11a1.969 1.969 0 0 0 1.933 2h12.134A1.97 1.97 0 0 0 16 18v-3.093l-1.546 1.546c-.413.413-.94.695-1.513.81l-3.4.679a2.947 2.947 0 0 1-1.85-.227 2.96 2.96 0 0 1-1.635-3.257l.681-3.397Z" />
                            <path d="M8.961 16a.93.93 0 0 0 .189-.019l3.4-.679a.961.961 0 0 0 .49-.263l6.118-6.117a2.884 2.884 0 0 0-4.079-4.078l-6.117 6.117a.96.96 0 0 0-.263.491l-.679 3.4A.961.961 0 0 0 8.961 16Zm7.477-9.8a.958.958 0 0 1 .68-.281.961.961 0 0 1 .682 1.644l-.315.315-1.36-1.36.313-.318Zm-5.911 5.911 4.236-4.236 1.359 1.359-4.236 4.237-1.7.339.341-1.699Z" />
                        </svg>
                        <span class="flex-1 ml-3 whitespace-nowrap">Sign Up</span>
                    </a>
                </li>
            </ul>
        </div>
    </aside>