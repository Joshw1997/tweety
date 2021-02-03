<div class="border border-primary rounded p-3 mb-3">
            <form method="POST" action="/tweets">
                
                @csrf

                <textarea 
                    name="body"  
                    class="w-100 form-control-plaintext"
                    placeholder="What's up doc?"
                ></textarea>

                <hr class="my-4">
            
                <footer class="d-lg-flex justify-content-between">
                    <img 
                        src="{{ auth()->user()->avatar }}"
                        alt="your avatar"
                        class="rounded-circle mr-2"
                        width="50"
                        height="50"
                    >
                    <button type="submit" class="btn btn-primary rounded shadow py-2 px-2 text-white">Tweet-a-roo!</button>
                </footer>
            </form>

            @error('body')
                <p class="text-danger text-sm mt-2">{{ $message }}</p>
            @enderror
        </div>