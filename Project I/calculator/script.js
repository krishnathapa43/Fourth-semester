
    function calculate(operation) {
      var A = parseInt(document.getElementById("A").value);
      var B = parseInt(document.getElementById("B").value);
      var result;

      switch (operation) {
        case 'add':
          result =A + B;
          break;
        case 'subtract':
          result = A- B;
          break;
        case 'multiply':
          result = A * B;
          break;
        case 'divide':
          result = A / B;
          break;
        case 'remainder':
          result = A % B;
          break;
      }

      document.getElementById("result").textContent = result;
    }