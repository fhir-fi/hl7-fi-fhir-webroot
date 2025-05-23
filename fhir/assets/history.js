// The master copy of this script lives at https://hl7.org/fhir/history.js
// The script is maintained at https://github.com/HL7/fhir-ig-history-template/history.js
// 
// PRs to improve the functionality are welcome; the copy on the HL7 website is updated when 
// the GitHub version is updated
// 
// maintained by Grahame Grieve, grahame@hl7.org
//
var lang = null;

function trans(text) {
  if (lang == null || lang == 'en') {
    return text;
  }
  if (lang == 'es') {
    switch (text) {
      case "Change Notes": return "Notas de lanzamiento";
      case "NPM Package": return "Paquete NPM";
      case "Date": return "Fecha";
      case "IG Version": return "Versión IG";
      case "FHIR Version": return "Versión FHIR";
      case "Description": return "Descripción";
      case "Links": return "Enlaces";
      case "Date": return "Fecha";
      case "Version": return "Versión";
      case "(not released version at this time)": return "(versión no lanzada en este momento)";
      case "(current)": return "(actual)";
      case "(last commit)": return "(último commit)";
      case "Work in Progress": return "Trabajo en progreso";
      case "Sequence": return "Secuencia";
      case "(Permanent Home)": return "Enlace permanente";
      case "The following versions have been published:": return "Las siguientes versiones se han publicado:";
      case "QA page": return "Página QA";
    }
  }
  if (lang == 'pt') {
    switch (text) {
      case "Change Notes": return "Notas de lançamento";
      case "NPM Package": return "Pacote NPM";
      case "Date": return "Data";
      case "IG Version": return "Versão IG";
      case "FHIR Version": return "Versão FHIR";
      case "Description": return "Descrição";
      case "Links": return "Links";
      case "Date": return "Data";
      case "Version": return "Versão";
      case "(not released version at this time)": return "(versão não lançada neste momento)";
      case "(current)": return "(atual)";
      case "(last commit)": return "(último commit)";
      case "Work in Progress": return "Trabalho em Curso";
      case "Sequence": return "Sequência";
      case "(Permanent Home)": return "(Link Permanente)";
      case "The following versions have been published:": return "As seguintes versões foram publicadas:";
      case "QA page": return "Página QA";
    }
  } 
  if (lang == 'fr') {
    switch (text) {
      case "Change Notes": return "Notes de version";
      case "NPM Package": return "Paquet NPM";
      case "Date": return "Date";
      case "IG Version": return "Version IG";
      case "FHIR Version": return "Version FHIR";
      case "Description": return "Description";
//      case "Links": return "";
      case "Date": return "Date";
      case "Version": return "Version";
      case "(not released version at this time)": return "(version non publiée à ce jour)";
      case "(current)": return "(actuelle)";
      case "(last commit)": return "(dernier commit)";
      case "Work in Progress": return "Travail en cours";
      case "Sequence": return "Séquence";
      case "(Permanent Home)": return "Lien permanent";
      case "The following versions have been published:": return "Les versions suivantes ont été publiées :";
      case "QA page": return "Page QA";
    }
  } 
  if (lang == 'nl') {
    switch (text) {
      case "Change Notes": return "Release opmerkingen";
      case "NPM Package": return "NPM-pakket";
      case "Date": return "Datum";
      case "IG Version": return "IG versie";
      case "FHIR Version": return "FHIR versie";
      case "Description": return "Beschrijving";
      case "Links": return "Links";
      case "Date": return "Datum";
      case "Version": return "Versie";
      case "(not released version at this time)": return "(op dit moment geen gepubliceerde versie)";
      case "(current)": return "(huidig)";
      case "(last commit)": return "(laatste commit)";
      case "Work in Progress": return "In uitvoering";
      case "Sequence": return "Volgorde";
      case "(Permanent Home)": return "Permanente link";
//      case "The following versions have been published:": return "";
      case "QA page": return "QA pagina";
    }
  }
  return text;
}

function hrow(tableTagsArray, title, seqstatus, hasFhirVersion) {
  if (hasFhirVersion)
    tableTagsArray.push('<tr style="background-color: #f9f9f9"><td colspan="5"><b>');
  else
    tableTagsArray.push('<tr style="background-color: #f9f9f9"><td colspan="4"><b>');
  tableTagsArray.push(title);
  tableTagsArray.push('</b>');
  if (seqstatus)
    tableTagsArray.push(' ('+seqstatus+')');
  tableTagsArray.push('</td></tr>');
}

function nrow(tableTagsArray, content, hasFhirVersion) {
  if (hasFhirVersion)
    tableTagsArray.push('<tr><td colspan="5">');
  else
    tableTagsArray.push('<tr><td colspan="4">');
  tableTagsArray.push(content);
  tableTagsArray.push('</td></tr>');
}

function row(tableTagsArray, date, url, curl, ver, fver, desc, cl, hasFhirVersion, jo, mName) {
  tableTagsArray.push('<tr>');
  tableTagsArray.push('<td><a href="' + url + '">' + date + '</a></td>');
  if (mName != null) {
    tableTagsArray.push('<td>' + ver + ' ('+mName+')</td>');
  } else {
    tableTagsArray.push('<td>' + ver + '</td>');
  }
  if (hasFhirVersion)
    tableTagsArray.push('<td>' + makeLink(fver) + '</td>');
  if (cl)
    tableTagsArray.push('<td>' + desc + ' - see <a href="'+url+"/"+cl+'">'+trans('Change Notes')+'</a></td>');
  else
    tableTagsArray.push('<td>' + desc + '</td>');
  var dl = 'full-ig.zip';
  if (curl == 'http://hl7.org/fhir' || curl == 'https://hl7.org/fhir') {
    dl = 'fhir-spec.zip';
  } 

  tableTagsArray.push('<td><a title="Home Page" href="'+url+'"><img src="https://hl7.org/fhir/assets/images/page.png"/></a>&nbsp;'+
    '<a title="Download" href="'+url+'/'+dl+'"><img src="https://hl7.org/fhir/assets/images/download.gif"/></a>&nbsp;');
  tableTagsArray.push(
    '<a title="QA Page" href="'+url+'/qa.html"><img src="https://hl7.org/fhir/assets/images/qa.png"/></a>&nbsp; ');
  if (jo == null || jo["sub-packages"] == null) {
    tableTagsArray.push(
       '<a title="'+trans('NPM Package')+'" href="'+url+'/package.tgz"><img src="https://hl7.org/fhir/assets/images/npm.png"/></a>&nbsp;')
  } else {
    for (var key in jo["sub-packages"]) {
      var s = jo["sub-packages"][key];
      tableTagsArray.push(
         '<a title="'+trans('NPM Package')+' '+s+'" href="'+url+'/'+s+'.tgz"><img src="https://hl7.org/fhir/assets/images/npm.png"/></a>&nbsp;')
    }
  }
  tableTagsArray.push('</td></tr>');
}

function makeLink(v) {
  if (v == null || v == '') {
    return "n/a";
  }
  if (v.indexOf('|') > -1) {
    var vl = v.split('|');
    return makeLink(vl[0])+' &amp; '+makeLink(vl[1]);
  }

  if ('5.0,.0' == v)
    return '<a href="https://hl7.org/fhir/R5">'+v+'</a>';
  if ('4.3.0' == v)
    return '<a href="https://hl7.org/fhir/R4B">'+v+'</a>';
  if ('4.0.1' == v)
    return '<a href="https://hl7.org/fhir/R4">'+v+'</a>';
  if ('4.0.0' == v)
    return '<a href="https://hl7.org/fhir/R4">'+v+'</a>';
  if ('3.5a.0' == v)
    return '<a href="https://hl7.org/fhir/2018Dec">'+v+'</a>';
  if ('3.5.0' == v)
    return '<a href="https://hl7.org/fhir/2018Sep">'+v+'</a>';
  if ('3.3.0' == v)
    return '<a href="https://hl7.org/fhir/2018May">'+v+'</a>';
  if ('3.2.0' == v)
    return '<a href="https://hl7.org/fhir/2018Jan">'+v+'</a>';
  if ('3.0.2' == v)
    return '<a href="https://hl7.org/fhir/STU3">'+v+'</a>';
  if ('3.0.1' == v)
    return '<a href="https://hl7.org/fhir/STU3">'+v+'</a>';
  if ('3.0.0' == v)
    return '<a href="https://hl7.org/fhir/STU3">'+v+'</a>';
  if ('1.8.0' == v)
    return '<a href="https://hl7.org/fhir/2017Jan">'+v+'</a>';
  if ('1.6.0' == v)
    return '<a href="https://hl7.org/fhir/2016Sep">'+v+'</a>';
  if ('1.4.0' == v)
    return '<a href="https://hl7.org/fhir/2016May">'+v+'</a>';
  if ('1.1.0' == v)
    return '<a href="https://hl7.org/fhir/2015Dec">'+v+'</a>';
  if ('1.0.2' == v)
    return '<a href="https://hl7.org/fhir/DSTU2">'+v+'</a>';
  if ('1.0.0' == v)
    return '<a href="https://hl7.org/fhir/2015Sep">'+v+'</a>';
  if ('0.5.0' == v)
    return '<a href="https://hl7.org/fhir/2015May">'+v+'</a>';
  if ('0.4.0' == v)
    return '<a href="https://hl7.org/fhir/2015Jan">'+v+'</a>';
  if ('0.0.82' == v)
    return '<a href="https://hl7.org/fhir/DSTU1">'+v+'</a>';
  if ('0.11' == v)
    return '<a href="https://hl7.org/fhir/2013Sep">'+v+'</a>';
  if ('0.06' == v)
    return '<a href="https://hl7.org/fhir/2013Jan">'+v+'</a>';
  if ('0.05' == v)
    return '<a href="https://hl7.org/fhir/2012Sep">'+v+'</a>';
  if ('0.01' == v)
    return '<a href="https://hl7.org/fhir/2012May">'+v+'</a>';
  return '<span style="text-decoration: line-through;" title="This version was the current build at the time and was not formally released (and is no longer available)">'+v+'</span>';
}

function rowNL(tableTagsArray, date, ver, fver, desc, hasFhirVersion, mName) {
  tableTagsArray.push('<tr>');
  tableTagsArray.push('<td>'+ date + '</td>');
  if (mName != null) {
    tableTagsArray.push('<td>' + ver + ' ('+mName+')</td>');
  } else {
    tableTagsArray.push('<td>' + ver + '</td>');
  }
  if (hasFhirVersion)
    tableTagsArray.push('<td>' + fver + '</td>');
  tableTagsArray.push('<td>' + desc + '</td>');
  tableTagsArray.push('</tr>');
}


function buildDataTable(dataList, curl, dataContainer, title, footnote) {
  var hasFhirVersion = false;
  if (curl != "http://hl7.org/fhir" && curl != "https://hl7.org/fhir" ) {
    for (var historyNode in dataList) {
      if (dataList.hasOwnProperty(historyNode)) {
        var element = dataList[historyNode];
        if (element.fhirversion)
          hasFhirVersion = true;
      }
    }
  }

  if (hasFhirVersion) {
    var tableTagsArray = [
      '<table class="history-grid">',
      '<thead><tr style="background-color: #efefef">',
          '<th width="100px">'+trans('Date')+'</th>',
          '<th width="100px">'+trans('IG Version')+'</th>',
          '<th width="100px">'+trans('FHIR Version')+'</th>',
          '<th>Description</th>',
          '<th>Links</th>',
      '</tr></thead><tbody>'
    ];
  } else {
    var tableTagsArray = [
      '<table class="history-grid">',
      '<thead><tr style="background-color: #efefef">',
          '<th width="100px">'+trans('Date')+'</th>',
          '<th width="100px">'+trans('Version')+'</th>',
          '<th>Description</th>',
          '<th>Links</th>',
      '</tr></thead><tbody>'
    ];
  }

  var currSeq = null;
  hrow(tableTagsArray, trans("Current Versions"), null, hasFhirVersion);
  var ci = null;
  var cp = null;
  // first pass: any versions labelled current + ci-build
  for (var historyNode in dataList) {
    if (dataList.hasOwnProperty(historyNode)) {
      var element = dataList[historyNode];
      if (element.status == 'ci-build') {
        ci = element;
      } else if (element.current) {
        currSeq = element.sequence;
        cp = element.path;
        desc = element.descCurrent;
        if (!desc) {
          desc = element.desc
        }
        var surl = element.altloc;
        if (surl)
          row(tableTagsArray, element.date, surl, curl, element.version, element.fhirversion, desc, null, hasFhirVersion, element, element.milestoneName);
        else
          row(tableTagsArray, element.date, curl, curl, element.version, element.fhirversion, desc, null, hasFhirVersion, element, element.milestoneName);
      }
    }
  }

  if (!cp) {
    rowNL(tableTagsArray, 'n/a',  '', '', trans('(not released version at this time)'), hasFhirVersion, curl);
  }
  if (ci) {
    desc = ci.descCurrent;
    if (!desc) {
      desc = ci.descmd;
      if (desc) {
        var reader = new commonmark.Parser();
        var writer = new commonmark.HtmlRenderer();
        var parsed = reader.parse(desc); 
        var desc = writer.render(parsed); 
      }
    }
    if (!desc)
      desc = ci.desc;
    row(tableTagsArray, trans('(current)'), ci.path, curl, trans('(last commit)'), '', desc, null, hasFhirVersion, ci, null);
  }

  var seq = "!!";
  var seqstatus = trans("Work in Progress");
  var allseq = new Array();
  for (var historyNode in dataList) {
    if (dataList.hasOwnProperty(historyNode)) {
      var element = dataList[historyNode];
      if (element.status != 'ci-build') {
        if (allseq.indexOf(element.sequence)) {
          allseq.push(element.sequence);
        }
      }
    }
  }

  // second pass: all versions, with sequence tag
  for (var historyNode in dataList) {
    if (dataList.hasOwnProperty(historyNode)) {
      var element = dataList[historyNode];
      if (element.status != 'ci-build') {
        if (element.sequence != seq) {
          seq = element.sequence;
          if (allseq.length <= 1) {
            hrow(tableTagsArray, seq+' '+trans('Sequence'), '', hasFhirVersion);
          } else if (seq == currSeq) {
            hrow(tableTagsArray, seq+' '+trans('Sequence'), trans('Current'), hasFhirVersion);
            seqstatus = 'Historical';
          } else
            hrow(tableTagsArray, seq+' '+trans('Sequence'), seqstatus, hasFhirVersion);
          if (element.sequenceNote) 
            nrow(tableTagsArray, element.sequenceNote, hasFhirVersion);
        }

        desc = element.descmd;
        if (desc) {
          var reader = new commonmark.Parser();
          var writer = new commonmark.HtmlRenderer();
          var parsed = reader.parse(desc); 
          var desc = writer.render(parsed); 
        } else
          desc = element.desc;
        if (element.current)
          desc = desc + ' <i>'+trans('(Permanent Home)')+'</i>';
        row(tableTagsArray, element.date, element.path, curl, element.version, element.fhirversion, desc, element.changes, hasFhirVersion, element, element.milestoneName);
      }
    }
  }

  tableTagsArray.push('</tbody></table>');
  if (footnote)
    footnote = "<p>"+footnote+"</p>";
   else
    footnote = "";
  dataContainer.innerHTML = '<p>'+trans('The following versions have been published:')+'</p>'+tableTagsArray.join('')+footnote;
}

function processIntro(md) {
  var reader = new commonmark.Parser();
  var writer = new commonmark.HtmlRenderer();
  var parsed = reader.parse(md); 
  var result = writer.render(parsed); 
  document.getElementById('intro').innerHTML = result;
}

function fixTitle(s) {
  if (s.indexOf("FHIR") == -1)
    return s+" (FHIR IG)";
  else
    return s;
}

function load(json) {
  var historyJson = JSON.parse(json.replace(/\n/g, "\\n").replace(/\r/g, "\\r"));
  lang = historyJson.language;
  document.title = fixTitle(historyJson.title);
  var h = document.getElementById('ig-title');
  h.innerHTML = fixTitle(historyJson.title);
  var f = document.getElementById('ig-footer');
  f.innerHTML = historyJson["package-id"]+": "+historyJson.title;
  if (historyJson.introduction) {
    processIntro(historyJson.introduction);
  }

  var dataContainer = document.getElementById('history-data');
  buildDataTable(historyJson.list, historyJson.canonical, dataContainer, historyJson.title, historyJson.footnote);
}

