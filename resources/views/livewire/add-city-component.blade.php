    <!-- start add city Section -->
    <section id="add">
        <div class="container">
            <div class="contact-card">
                <div class="form">
                    <h6 class="section-title mb-4">Add a city</h6>
                    <form wire:submit.prevent="store" >
                        <label for="title">Title</label>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-lg" id="title" aria-describedby="title" 
                            placeholder="Enter title"   wire:model="title"  minlength="3" maxlength="20" required>
                        </div>
                        <label for="mainImage">Main image</label>
                        <div class="form-group">
                            <input type="file" class="form-control form-control-lg" id="mainImage" aria-describedby="main image" 
                            placeholder="Enter main image"  wire:model="mainImage" accept="image/png, image/jpeg" required>
                        </div>
                        <label for="description">Description</label>
                        <div class="form-group" >
                            <div wire:ignore >
                                 <textarea  wire:model.lazy="description"  name="description" id="description" name="description"
                                  cols="30" rows="7" class="form-control form-control-lg" 
                                  placeholder="Enter Description"  minlength="3" required  ></textarea>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block btn-lg mt-3">Submit</button>
                    </form>
                
                </div>
            </div>
        </div>
    </section>
    <!-- end add city Section -->



