    <!-- add city Section -->
    <section id="add">
        <div class="container">
            <div class="contact-card">
             
                <div class="form">
                    <h6 class="section-title mb-4">Add a image</h6>

                  
                    <form wire:submit.prevent="store">

                        <label for="image">Image</label>
                        <div class="form-group">
                            <input type="file" class="form-control form-control-lg" id="image" aria-describedby="image" placeholder="Enter image"  wire:model="image"  accept="image/png, image/jpeg" required>
                        </div>


                        <label for="description">Description</label>
                        <div class="form-group" >
                            <div >
                                <textarea name="contact-message" id="description" cols="30" rows="7" class="form-control form-control-lg" placeholder="Enter Description" wire:model="description" minlength="3"  required></textarea>
                            </div>
                        </div>


                        <button type="submit" class="btn btn-primary btn-block btn-lg mt-3">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section -->

    @push('script')
    <script>

        tinymce.init({
  
          selector: '#description',
  
          plugins: [
  
            'a11ychecker','advlist','advcode','advtable','autolink','checklist','export',
  
            'lists','link','image','charmap','preview','anchor','searchreplace','visualblocks',
  
            'powerpaste','fullscreen','formatpainter','insertdatetime','media','table','help','wordcount'
  
          ],
  
          toolbar: 'undo redo | formatpainter casechange blocks | bold italic backcolor | ' +
  
            'alignleft aligncenter alignright alignjustify | ' +
  
            'bullist numlist checklist outdent indent | removeformat | a11ycheck code table help'
  
        });

      </script>
    @endpush
