const template = document.createElement("template");
template.innerHTML = `
    <link rel="stylesheet" href="Integrantes/styles.css"/>
    <div class="grupo-proyecto">
      <div class="avatar">
        <img />
      </div>
      <div class="details">
        <h2></h2>
        <div class="info">
          <p>Nombre: <slot name="nombre" /></p>
          <p>ID: <slot name="age" /></p>
          <p>Materias: <slot name="materia" /></p>
        </div>
        <div class="actions">
            <button id="toggle">Ver Detalles</button>
        </div>
      </div>
    </div>
`;
class Integrantes extends HTMLElement {
  //constructor, se llama cuando se crea o actualiza una instancia del elemento
  constructor() {
    super();
    this.showInfo = false;
    //visualizar la pagina
    this.attachShadow({ mode: "open" });
    this.shadowRoot.appendChild(template.content.cloneNode(true));
  }

  toggleInfo = () => {
    this.showInfo = !this.showInfo;
    this.shadowRoot.querySelector(".info").style.display = this.showInfo
      ? "block"
      : "none";
    this.shadowRoot.querySelector("#toggle").innerHTML = this.showInfo
      ? "Ocultar Detalles"
      : "Ver Detalles";
  };

  static get observedAttributes() {
    return ["name", "avatar"];
  }

  //AttributeChangedCallback, se llama cuando se agrega, 
  //elimina, actualiza o reemplaza un atributo
  attributeChangedCallback(name, oldValue, newValue) {
    this.shadowRoot.querySelector(".details h2").innerText =
      this.getAttribute("name");
    this.shadowRoot.querySelector(".avatar img").src =
      this.getAttribute("avatar");
    this.shadowRoot.querySelector(".avatar img").alt =
      this.getAttribute("name");
  }

  //connectedCallback, se llama cada vez que el elemento se inserta en el DOM
  //alerata
  connectedCallback() {
    this.shadowRoot
      .querySelector("#toggle")
      .addEventListener("click", this.toggleInfo);
    this.shadowRoot
      .querySelector("#greet")
      .addEventListener("click", () =>
        window.alert(`Integrante: ${this.getAttribute("name")}`)
      );
  }

  //disabled Callback, se llama cada vez que el elemento se elimina del DOM
  disconnectedCallback() {
    this.shadowRoot
      .querySelector("#toggle")
      .removeEventListener("click", this.toggleInfo);
    this.shadowRoot
      .querySelector("#greet")
      .removeEventListener("click", () =>
        window.alert(`Intregrante ${this.getAttribute("name")}`)
      );
  }
}

export default Integrantes;
