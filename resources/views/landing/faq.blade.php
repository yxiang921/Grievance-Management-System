
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
    <link href="{{ asset('css/tailwind.css') }}" rel="stylesheet">
        
  </head>

<section class="py-24">
      <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div
          class="flex flex-col justify-center items-center gap-x-16 gap-y-5 xl:gap-28 lg:flex-row lg:justify-between max-lg:max-w-2xl mx-auto max-w-full"
        >
          <div class="w-full lg:w-1/2">
            <img
              src="https://pagedone.io/asset/uploads/1696230182.png"
              alt="FAQ tailwind section"
              class="w-full rounded-xl object-cover"
            />
          </div>
          <div class="w-full lg:w-1/2">
            <div class="lg:max-w-xl">
              <div class="mb-6 lg:mb-16">
                <h6
                  class="text-lg text-center font-medium text-indigo-600 mb-2 lg:text-left"
                >
                  faqs
                </h6>
                <h2
                  class="text-4xl text-center font-bold text-gray-900 leading-[3.25rem] mb-5 lg:text-left"
                >
                  Looking for answers?
                </h2>
              </div>
              <div class="accordion-group" data-accordion="default-accordion">
                <div
                  class="accordion pb-8 border-b border-solid border-gray-200 active"
                  id="basic-heading-one-with-arrow-always-open"
                >
                  <button
                    class="accordion-toggle group inline-flex items-center justify-between text-xl font-normal leading-8 text-gray-600 w-full transition duration-500 hover:text-indigo-600 accordion-active:text-indigo-600 accordion-active:font-medium always-open"
                    aria-controls="basic-collapse-one-with-arrow-always-open"
                  >
                    <h5 >How to create an account?</h5>
                    <svg
                      class="text-gray-900 transition duration-500 group-hover:text-indigo-600 accordion-active:text-indigo-600 accordion-active:rotate-180"
                      width="22"
                      height="22"
                      viewBox="0 0 22 22"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M16.5 8.25L12.4142 12.3358C11.7475 13.0025 11.4142 13.3358 11 13.3358C10.5858 13.3358 10.2525 13.0025 9.58579 12.3358L5.5 8.25"
                        stroke="currentColor"
                        stroke-width="1.6"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                      ></path>
                    </svg>
                  </button>
                  <div
                    id="basic-collapse-one-with-arrow-always-open"
                    class="accordion-content w-full px-0 overflow-hidden pr-4 active"
                    style="max-height: 100px;"
                    aria-labelledby="basic-heading-one-with-arrow-always-open"
                  >
                    <p class="text-base font-normal text-gray-600 ">
                      To create an account, find the 'Sign up' or 'Create
                      account' button, fill out the registration form with your
                      personal information, and click 'Create account' or 'Sign
                      up.' Verify your email address if needed, and then log in
                      to start using the platform.
                    </p>
                  </div>
                </div>
                <div
                  class="accordion py-8 border-b border-solid border-gray-200 "
                  id="basic-heading-two-with-arrow-always-open"
                >
                  <button
                    class="accordion-toggle group inline-flex items-center justify-between font-normal text-xl leading-8 text-gray-600 w-full transition duration-500 hover:text-indigo-600 accordion-active:text-indigo-600 accordion-active:font-medium"
                    aria-controls="basic-collapse-two-with-arrow-always-open"
                  >
                    <h5>Have any trust issue?</h5>
                    <svg
                      class="text-gray-900 transition duration-500 group-hover:text-indigo-600 accordion-active:text-indigo-600 accordion-active:rotate-180"
                      width="22"
                      height="22"
                      viewBox="0 0 22 22"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M16.5 8.25L12.4142 12.3358C11.7475 13.0025 11.4142 13.3358 11 13.3358C10.5858 13.3358 10.2525 13.0025 9.58579 12.3358L5.5 8.25"
                        stroke="currentColor"
                        stroke-width="1.6"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                      ></path>
                    </svg>
                  </button>
                  <div
                    id="basic-collapse-two-with-arrow-always-open"
                    class="accordion-content w-full px-0 overflow-hidden pr-4"
                    aria-labelledby="basic-heading-two-with-arrow-always-open"
                    style=""
                  >
                    <p class="text-base text-gray-500 font-normal">
                      Our focus on providing robust and user-friendly content
                      management capabilities ensures that you can manage your
                      content with confidence, and achieve your content
                      marketing goals with ease.
                    </p>
                  </div>
                </div>
                <div
                  class="accordion py-8 border-b border-solid border-gray-200"
                  id="basic-heading-three-with-arrow-always-open"
                >
                  <button
                    class="accordion-toggle group inline-flex items-center justify-between text-xl font-normal leading-8 text-gray-600 w-full transition duration-500 hover:text-indigo-600 accordion-active:font-medium accordion-active:text-indigo-600"
                    aria-controls="basic-collapse-three-with-arrow-always-open"
                  >
                    <h5>How can I reset my password?</h5>
                    <svg
                      class="text-gray-900 transition duration-500 group-hover:text-indigo-600 accordion-active:text-indigo-600 accordion-active:rotate-180"
                      width="22"
                      height="22"
                      viewBox="0 0 22 22"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M16.5 8.25L12.4142 12.3358C11.7475 13.0025 11.4142 13.3358 11 13.3358C10.5858 13.3358 10.2525 13.0025 9.58579 12.3358L5.5 8.25"
                        stroke="currentColor"
                        stroke-width="1.6"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                      ></path>
                    </svg>
                  </button>
                  <div
                    id="basic-collapse-three-with-arrow-always-open"
                    class="accordion-content w-full px-0 overflow-hidden pr-4"
                    aria-labelledby="basic-heading-three-with-arrow-always-open"
                  >
                    <p class="text-base text-gray-500 font-normal">
                      Our focus on providing robust and user-friendly content
                      management capabilities ensures that you can manage your
                      content with confidence, and achieve your content
                      marketing goals with ease.
                    </p>
                  </div>
                </div>
                <div
                  class="accordion py-8 "
                  id="basic-heading-four-with-arrow-always-open"
                >
                  <button
                    class="accordion-toggle group inline-flex items-center justify-between text-xl font-normal leading-8 text-gray-600 w-full transition duration-500 hover:text-indigo-600 accordion-active:font-medium accordion-active:text-indigo-600"
                    aria-controls="basic-collapse-four-with-arrow-always-open"
                  >
                    <h5>What is the payment process?</h5>
                    <svg
                      class="text-gray-900 transition duration-500 group-hover:text-indigo-600 accordion-active:text-indigo-600 accordion-active:rotate-180"
                      width="22"
                      height="22"
                      viewBox="0 0 22 22"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M16.5 8.25L12.4142 12.3358C11.7475 13.0025 11.4142 13.3358 11 13.3358C10.5858 13.3358 10.2525 13.0025 9.58579 12.3358L5.5 8.25"
                        stroke="currentColor"
                        stroke-width="1.6"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                      ></path>
                    </svg>
                  </button>
                  <div
                    id="basic-collapse-four-with-arrow-always-open"
                    class="accordion-content w-full px-0 overflow-hidden pr-4"
                    aria-labelledby="basic-heading-four-with-arrow-always-open"
                  >
                    <p class="text-base text-gray-500 font-normal">
                      Our focus on providing robust and user-friendly content
                      management capabilities ensures that you can manage your
                      content with confidence, and achieve your content
                      marketing goals with ease.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
                                            