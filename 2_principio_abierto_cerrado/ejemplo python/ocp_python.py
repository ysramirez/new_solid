class AreaCalculator:
    def calculate_area(self, shape):
        if shape['type'] == 'circle':
            return 3.14 * shape['radius'] ** 2
        elif shape['type'] == 'square':
            return shape['side'] ** 2
        elif shape['type'] == 'triangle':
            return 0.5 * shape['base'] * shape['height']
        else:
            return None


circle = {'type': 'circle', 'radius': 5}
square = {'type': 'square', 'side': 4}
triangle = {'type': 'triangle', 'base': 3, 'height': 6}

calculator = AreaCalculator()

print(f"The area of the {circle['type']} is: {calculator.calculate_area(circle)}")  
print(f"The area of the {square['type']} is: {calculator.calculate_area(square)}") 
print(f"The area of the {triangle['type']} is: {calculator.calculate_area(triangle)}")
