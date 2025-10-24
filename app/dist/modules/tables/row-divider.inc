<section id="module-six">
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
        <h3 class="uk-h3 tm-heading-fragment">Row (Horizontal) Divider</h3>
        <p>Adding a <code>class="divider"</code> to the table row.</p>
        <div class="uk-section uk-section-muted uk-padding">
          <h3 id="" class="uk-h3 tm-heading-fragment"><span class="uk-label uk-label-danger">ACCESSIBILITY REQUIREMENT</span></h3>
          <p class="accessibility p">Add a <code>scope="colgroup"</code> whenever you use a <code>colspan="x"</code>.</p>
        </div>
        <!-- Example -->
        <div class="uk-text-default uk-text-normal uk-text-uppercase">Example</div>
        <div class="uk-card uk-card-default uk-padding">
          <div class="basic-table">
            <table class="basic-table full-width">
              <caption>
                Caption
              </caption>
              <thead>
                <tr>
                  <th scope="col">...</th>
                  <th scope="col">...</th>
                  <th scope="col">...</th>
                  <th scope="col">...</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row"><code>left aligned</code></th>
                  <td><code>right aligned</code></td>
                  <td><code>right aligned</code></td>
                  <td><code>right aligned</code></td>
                </tr>
                <tr class="divider">
                  <th scope="row">Divider Row, Aligned-left</th>
                  <td>Divider Row, Aligned-right</td>
                  <td>Divider Row, Aligned-right</td>
                  <td>Divider Row, Aligned-right</td>
                </tr>
                <tr>
                  <th scope="row"><code>left aligned</code></th>
                  <td><code>right aligned</code></td>
                  <td><code>right aligned</code></td>
                  <td><code>right aligned</code></td>
                </tr>
                <tr class="divider">
                  <td colspan="4" scope="colgroup">Divider</td>
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
        <pre><code class="language-html" id="RowSectionDivider">&lt;div class="basic-table"&gt;
  &lt;table class="basic-table full-width"&gt;
&lt;caption&gt;Caption&lt;/caption&gt;
    &lt;thead&gt;
      &lt;tr&gt;
        &lt;th scope="col"&gt;...&lt;/th&gt;
        &lt;th scope="col"&gt;...&lt;/th&gt;
        &lt;th scope="col"&gt;...&lt;/th&gt;
        &lt;th scope="col"&gt;...&lt;/th&gt;
      &lt;/tr&gt;
    &lt;/thead&gt;
    &lt;tbody&gt;
      &lt;tr&gt;
        &lt;th scope="row"&gt;...&lt;/th&gt;
        &lt;td&gt;...&lt;/td&gt;
        &lt;td&gt;...&lt;/td&gt;
        &lt;td&gt;...&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr class="divider"&gt;
        &lt;th scope="row"&gt;Divider Row, Aligned-left&lt;/th&gt;
        &lt;td&gt;Divider Row, Aligned-right&lt;/td&gt;
        &lt;td&gt;Divider Row, Aligned-right&lt;/td&gt;
        &lt;td&gt;Divider Row, Aligned-right&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr&gt;
        &lt;th scope="row"&gt;...&lt;/th&gt;
        &lt;td&gt;...&lt;/td&gt;
        &lt;td&gt;...&lt;/td&gt;
        &lt;td&gt;...&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr class="divider"&gt;
        &lt;td colspan="4" scope="colgroup"&gt;
			Divider
&lt;/td&gt;
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

        <p>
          <button class="copy-element uk-button uk-button-primary" data-clipboard-action="copy" data-clipboard-target="#RowSectionDivider"><span uk-icon="copy"></span>Copy to clipboard</button>
        </p>
      </div>

      <!-- end main template area -->
    </div>
    <div class="grid-right"></div>
  </div>
  <!-- end master layout-->
</section>
