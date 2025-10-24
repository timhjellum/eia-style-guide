<section id="row-bold">
  <!-- start master layout-->
  <div class="grid-wrapper">
    <div class="grid-left">
      <!-- start left navigation-->
      <div></div>
      <!-- end master layout-->
    </div>
    <div class="grid-main">
      <!-- start main template area -->

      <div class="eia-container">
        <h3 class="uk-h3 tm-heading-fragment">Row Bold</h3>
        <a name="RowBold"></a>
        <p>Adding a <code>class="bold"</code> to the table row ( &lt;tr&gt;).</p>
        <p class="accessibility p">
          <strong>
            <span class="accessibility-requirement">Accessibility requirement</span>
          </strong>
          Add a <code>scope="colgroup"</code> whenever you use a <code>colspan="x"</code>.
        </p>

        <!-- Example -->
        <div class="uk-text-default uk-text-normal uk-text-uppercase">Example</div>
        <div class="uk-card uk-card-default uk-padding">
          <div class="basic-table">
            <table class="basic-table full-width">
              <thead>
                <tr>
                  <th scope="col">...</th>
                  <th scope="col">...</th>
                  <th scope="col">...</th>
                  <th scope="col">...</th>
                </tr>
              </thead>
              <tbody>
                <tr class="bold">
                  <th scope="row"><code>left aligned</code></th>
                  <td><code>right aligned</code></td>
                  <td><code>right aligned</code></td>
                  <td><code>right aligned</code></td>
                </tr>
                <tr>
                  <th scope="row"><code>left aligned</code></th>
                  <td><code>right aligned</code></td>
                  <td><code>right aligned</code></td>
                  <td><code>right aligned</code></td>
                </tr>
                <tr class="bold">
                  <td colspan="4" scope="colgroup">Aligned-left</td>
                </tr>
                <tr>
                  <th scope="row"><code>left aligned</code></th>
                  <td><code>right aligned</code></td>
                  <td><code>right aligned</code></td>
                  <td><code>right aligned</code></td>
                </tr>
                <tr>
                  <th scope="row"><code>left aligned</code></th>
                  <td><code>right aligned</code></td>
                  <td><code>right aligned</code></td>
                  <td><code>right aligned</code></td>
                </tr>
              </tbody>
            </table>
          </div>
          <!-- end card -->
        </div>
        <!-- HTML -->
        <div class="uk-text-default uk-text-normal uk-text-uppercase copy-element">HTML</div>
        <pre><code class="language-html" id="RowBold">&lt;div class="basic-table"&gt;
  &lt;table class="basic-table full-width"&gt;
    &lt;thead&gt;
      &lt;tr&gt;
        &lt;th scope="col"&gt;...&lt;/th&gt;
        &lt;th scope="col"&gt;...&lt;/th&gt;
        &lt;th scope="col"&gt;...&lt;/th&gt;
        &lt;th scope="col"&gt;...&lt;/th&gt;
      &lt;/tr&gt;
    &lt;/thead&gt;
    &lt;tbody&gt;
      &lt;tr class="bold"&gt;
        &lt;th scope="row"&gt;...&lt;/th&gt;
        &lt;td&gt;...&lt;/td&gt;
        &lt;td&gt;...&lt;/td&gt;
        &lt;td&gt;...&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr&gt;
        &lt;th scope="row"&gt;...&lt;/th&gt;
        &lt;td&gt;...&lt;/td&gt;
        &lt;td&gt;...&lt;/td&gt;
        &lt;td&gt;...&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr class="bold"&gt;
        &lt;td colspan="4" scope="colgroup"&gt;Aligned-left&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr&gt;
        &lt;th scope="row"&gt;...&lt;/th&gt;
        &lt;td&gt;...&lt;/td&gt;
        &lt;td&gt;...&lt;/td&gt;
        &lt;td&gt;...&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr&gt;
        &lt;th scope="row"&gt;...&lt;/th&gt;
        &lt;td&gt;...&lt;/td&gt;
        &lt;td&gt;...&lt;/td&gt;
        &lt;td&gt;...&lt;/td&gt;
      &lt;/tr&gt;
    &lt;/tbody&gt;
  &lt;/table&gt;
&lt;/div&gt;</code></pre>
      </div>
      <p>
        <button class="copy-element uk-button uk-button-primary" data-clipboard-action="copy" data-clipboard-target="#RowBold"><span uk-icon="copy"></span>Copy to clipboard</button>
      </p>

      <!-- end main template area -->
    </div>
    <div class="grid-right"></div>
  </div>
  <!-- end master layout-->
</section>
