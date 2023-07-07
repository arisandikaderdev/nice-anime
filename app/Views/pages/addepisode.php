<section class="container">
    <h2 class="section-title">
        Add Anime Episode
    </h2>

    <form action="<?= base_url(); ?>addepisode" method="post">
        <label for="select_anime">
            <select name="anime_id" id="select_anime">
                <option value="">Select anime</option>
            </select>
        </label>
        <label for="episode">
            <input type="number" name="episode" id="episdoe" placeholder="input episode (number)">
        </label>

        <div class="res-wrapper">
            <div class="res">
                <h3>1080p</h3>
                <div x-data="{data : [
                                    {
                            id: new Date().getTime(),
                        }
                        ]}">
                    <template x-for="(item,index) in data" :key="index">
                        <div class="link-wrapper">
                            <input type="text" :name="'r1080-' + index" placeholder="insert link">
                            <input type="text" placeholder="link name" :name="'n1080-' + index">
                        </div>
                    </template>
                    <button class="button" @click.prevent="data.push({
                        id: new Date().getTime(),
                    })">add link</button>
                </div>
            </div>


        </div>
        <div class="res-wrapper">
            <div class="res">
                <h3>720p</h3>
                <div x-data="{data : [
                                    {
                            id: new Date().getTime(),
                        }
                        ]}">
                    <template x-for="(item,index) in data" :key="index">
                        <div class="link-wrapper">
                            <input type="text" :name="'r720-' + index" placeholder="insert link">
                            <input type="text" placeholder="link name" :name="'n720-' + index">
                        </div>
                    </template>
                    <button class="button" @click.prevent="data.push({
                        id: new Date().getTime(),
                    })">add link</button>
                </div>
            </div>


        </div>
        <div class="res-wrapper">
            <div class="res">
                <h3>480p</h3>
                <div x-data="{data : [
                                    {
                            id: new Date().getTime(),
                        }
                        ]}">
                    <template x-for="(item,index) in data" :key="index">
                        <div class="link-wrapper">
                            <input type="text" :name="'r480-' + index" placeholder="insert link">
                            <input type="text" placeholder="link name" :name="'n480-' + index">
                        </div>
                    </template>
                    <button class="button" @click.prevent="data.push({
                        id: new Date().getTime(),
                    })">add link</button>
                </div>
            </div>


        </div>
        <div class="res-wrapper">
            <div class="res">
                <h3>360p</h3>
                <div x-data="{data : [
                                    {
                            id: new Date().getTime(),
                        }
                        ]}">
                    <template x-for="(item,index) in data" :key="index">
                        <div class="link-wrapper">
                            <input type="text" :name="'r360-' + index" placeholder="insert link">
                            <input type="text" placeholder="link name" :name="'n360-' + index">
                        </div>
                    </template>
                    <button class="button" @click.prevent="data.push({
                        id: new Date().getTime(),
                    })">add link</button>
                </div>
            </div>

            <input type="submit" value="Add episode">
        </div>

    </form>
</section>