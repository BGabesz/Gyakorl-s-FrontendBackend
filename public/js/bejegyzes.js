class Bejegyzes {
    constructor(node,adat)  {
      this.node = node;
      this.adat = adat;
      this.tevekenyseg_nev = this.node.children(".tevekenyseg");
      this.tevekenyseg_nev.text(adat.tevekenyseg_nev);
      
      this.osztaly_id = this.node.children(".osztaly");
      this.osztaly_id.text(adat.osztaly_id);

      this.pontszam = this.node.children(".pont");
      this.pontszam.text(adat.pontszam);

      this.status = this.node.children(".status");
      this.status.text(adat.allapot);
    }
  }
  