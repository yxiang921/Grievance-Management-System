
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grievance Management System</title>
    <link rel="stylesheet" href="css/tailwind.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.28.0/feather.min.js" integrity="sha512-7x3zila4t2qNycrtZ31HO0NnJr8kg2VI67YLoRSyi9hGhRN66FHYWr7Axa9Y1J9tGYHVBPqIjSE1ogHrJTz51g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/background.css') }}" rel="stylesheet">
    <link href="{{ asset('css/tailwind.css') }}" rel="stylesheet">
        
</head>
<div class="flex items-center justify-center min-h-screen relative ">
  <div class="area">
      <ul class="circles">
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
      </ul>
  </div>
  
  <div class="absolute w-full bg-white px-6 pt-10 pb-8 shadow-xl ring-1 ring-gray-900/5 sm:mx-auto sm:max-w-2xl sm:rounded-lg sm:px-10">
    <div class="mx-auto px-5">
          <div class="flex flex-col items-center">
              <h2 class="mt-5 text-center text-3xl font-bold tracking-tight md:text-5xl">FAQ</h2>
              <p class="mt-3 text-lg text-neutral-500 md:text-xl">Frequenty asked questions

              </p>
          </div>
          <div class="mx-auto mt-8 grid max-w-xl divide-y divide-neutral-200">
              <div class="py-5">
                  <details class="group">
                      <summary class="flex cursor-pointer list-none items-center justify-between font-medium">
                          <span> What is the purpose of the grievance management system?? </span>
                          <span class="transition group-open:rotate-180">
                                  <svg fill="none" height="24" shape-rendering="geometricPrecision"
                                      stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                      stroke-width="1.5" viewBox="0 0 24 24" width="24">
                                      <path d="M6 9l6 6 6-6"></path>
                                  </svg>
                              </span>
                      </summary>
                      <p class="group-open:animate-fadeIn mt-3 text-neutral-600">
                        The Grievance Management System is designed to streamline the process of submitting, tracking, and resolving grievances for users. It ensures transparency, efficiency, and accountability.
                      </p>
                  </details>
              </div>
              <div class="py-5">
                  <details class="group">
                      <summary class="flex cursor-pointer list-none items-center justify-between font-medium">
                          <span> How do I submit a grievance? </span>
                          <span class="transition group-open:rotate-180">
                                  <svg fill="none" height="24" shape-rendering="geometricPrecision"
                                      stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                      stroke-width="1.5" viewBox="0 0 24 24" width="24">
                                      <path d="M6 9l6 6 6-6"></path>
                                  </svg>
                              </span>
                      </summary>
                      <p class="group-open:animate-fadeIn mt-3 text-neutral-600">To submit a grievance, log in to the system, navigate to the "Submit Grievance" section, fill in the required details, and click on "Submit." You will receive a confirmation once your grievance is successfully submitted.
                      </p>
                  </details>
              </div>
              <div class="py-5">
                  <details class="group">
                      <summary class="flex cursor-pointer list-none items-center justify-between font-medium">
                          <span>  How can I track the status of my grievance? </span>
                          <span class="transition group-open:rotate-180">
                                  <svg fill="none" height="24" shape-rendering="geometricPrecision"
                                      stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                      stroke-width="1.5" viewBox="0 0 24 24" width="24">
                                      <path d="M6 9l6 6 6-6"></path>
                                  </svg>
                              </span>
                      </summary>
                      <p class="group-open:animate-fadeIn mt-3 text-neutral-600">
                        After logging in, go to the "Grievance History" or "Track Grievance" page. You will see the status of all your submitted grievances, such as "Pending," "Under Review," or "Resolved."
                      </p>
                  </details>
              </div>
              <div class="py-5">
                  <details class="group">
                      <summary class="flex cursor-pointer list-none items-center justify-between font-medium">
                          <span> Can I edit or update my grievance after submission? </span>
                          <span class="transition group-open:rotate-180">
                                  <svg fill="none" height="24" shape-rendering="geometricPrecision"
                                      stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                      stroke-width="1.5" viewBox="0 0 24 24" width="24">
                                      <path d="M6 9l6 6 6-6"></path>
                                  </svg>
                              </span>
                      </summary>
                      <p class="group-open:animate-fadeIn mt-3 text-neutral-600">
                        No, grievances cannot be edited after submission. However, you can contact the administrator or grievance officer if additional details need to be provided.
                      </p>
                  </details>
              </div>
              <div class="py-5">
                  <details class="group">
                      <summary class="flex cursor-pointer list-none items-center justify-between font-medium">
                          <span> How do I contact support?</span>
                          <span class="transition group-open:rotate-180">
                                  <svg fill="none" height="24" shape-rendering="geometricPrecision"
                                      stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                      stroke-width="1.5" viewBox="0 0 24 24" width="24">
                                      <path d="M6 9l6 6 6-6"></path>
                                  </svg>
                              </span>
                      </summary>
                      <p class="group-open:animate-fadeIn mt-3 text-neutral-600">If you need help with our platform or
                          have any other questions, you can contact us by submitting a support
                          request through the website <a href="http://grievancesys.rf.gd/" style="color: blue; text-decoration: underline;">http://grievancesys.rf.gd/</a> or by emailing sucfypgms@gmail.com.
                      </p>
                  </details>
              </div>
              <div class="py-5">
                  <details class="group">
                      <summary class="flex cursor-pointer list-none items-center justify-between font-medium">
                          <span> Who reviews the grievances? </span>
                          <span class="transition group-open:rotate-180">
                                  <svg fill="none" height="24" shape-rendering="geometricPrecision"
                                      stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                      stroke-width="1.5" viewBox="0 0 24 24" width="24">
                                      <path d="M6 9l6 6 6-6"></path>
                                  </svg>
                              </span>
                      </summary>
                      <p class="group-open:animate-fadeIn mt-3 text-neutral-600">
                      Grievances which you submitted will review by administrators or related department within the organization who have the authority to investigate and resolve issues.
                      </p>
                  </details>
              </div>
          </div>
      </div>
    </div>
  </div>
</div>
