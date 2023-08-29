<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Cart</title>
</head>
<body>
    <h1>Cart</h1>
    <main class="my-8">
        <div class="container px-6 mx-auto">
            <div class="flex justify-center my-6">
                <div class="flex flex-col w-full p-8 text-gray-800 bg-white shadow-lg pin-r pin-y md:w-4/5 lg:w-4/5">
                  @if ($message = Session::get('success'))
                      <div class="p-4 mb-3 bg-green-400 rounded">
                          <p class="text-green-800">{{ $message }}</p>
                      </div>
                  @endif
                    <h3 class="text-3xl font-bold">Carts</h3>
                  <div class="flex-1">
                    <table class="w-full text-sm lg:text-base" cellspacing="0">
                      <thead>
                        <tr class="h-12 uppercase">
                          <th class="hidden md:table-cell"></th>
                          <th class="text-left">Name</th>
                          <th class="pl-5 text-left lg:text-right lg:pl-0">
                            <span class="lg:hidden" title="Quantity">Qtd</span>
                            <span class="hidden lg:inline">Quantity</span>
                          </th>
                          <th class="hidden text-right md:table-cell"> price</th>
                          <th class="hidden text-right md:table-cell"> Remove </th>
                        </tr>
                      </thead>
                      <tbody>
                          @foreach ($list as $list)
                        <tr>
                          <td class="hidden pb-4 md:table-cell">
                            {{-- <a href="#">
                              <img src="{{ $list->attributes->image }}" class="w-20 rounded" alt="Thumbnail">
                            </a> --}}
                          </td>
                          <td>
                            <a href="#">
                              <p class="mb-2 md:ml-4 text-purple-600 font-bold">{{ $list->namaBarang }}</p>
                              
                            </a>
                          </td>
                          <td class="justify-center mt-6 md:justify-end md:flex">
                            <div class="h-10 w-28">
                            </div>
                          </td>
                          <td class="hidden text-right md:table-cell">
                            <span class="text-sm font-medium lg:text-base">
                                Rp{{ $list->price }}
                            </span>
                          </td>
                          <td class="hidden text-right md:table-cell">                        
                          </td>
                        </tr>
                        @endforeach  
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
        </div>
    </main>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>