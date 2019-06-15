
var PasswordStrength = function(container, progressbar, password){

  this.options = {};
  this.passwordTxt = $(password);
  this.container = container;
  this.progressbar = progressbar;
  this.score = 0;

  this._translate(this._setStrength());

}

PasswordStrength.prototype._setStrength = function () {

  var self = this;

  this.options.ui = {
    container: this.container,
    showVerdictsInsideProgressBar:true,
    viewports: {
      progress: this.progressbar
    }
  }

  this.options.common = ({
    onScore: function(options, word, totalScoreCalculated){
      self.score = totalScoreCalculated;
      return totalScoreCalculated;
    }
  });

  this.passwordTxt.pwstrength(this.options);

};

PasswordStrength.prototype._translate = function (fn) {

  i18next.init({
    lng: 'es',
    resources: {
      es: {
        translation: {
          "wordLength": "Tu contrase&ntilde;a es demasiado corta",
          "wordNotEmail": "No uses tu email como tu contrase&ntilde;a",
          "wordSimilarToUsername": "Tu contrase&ntilde;a no puede contener tu nombre de usuario",
          "wordTwoCharacterClasses": "Mezcla diferentes clases de caracteres",
          "wordRepetitions": "Demasiadas repeticiones",
          "wordSequences": "Tu contrase&ntilde;a contiene secuencias",
          "errorList": "Errores:",
          "veryWeak": "Muy D&eacute;bil",
          "weak": "D&eacute;bil",
          "normal": "Normal",
          "medium": "Media",
          "strong": "Fuerte",
          "veryStrong": "Muy Fuerte",
          "start": "Comience a escribir la contrase&ntilde;a",
          "label": "Contrase&ntilde;a",
          "pageTitle": "Bootstrap 3 Password Strength Meter - Ejemplo de Traducciones",
          "goBack": "Atr&aacute;s"
        }
      }
    }
  }, fn);

};

PasswordStrength.prototype.getScore = function () {
  return this.score;
};
