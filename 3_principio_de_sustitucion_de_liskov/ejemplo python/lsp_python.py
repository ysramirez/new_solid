class Vehicle:
    def __init__(self, speed, fuel):
        self._speed = speed
        self._fuel = fuel
    
    def move(self):
        return f"The vehicle moves at {self._speed} km/h"
    
    def get_fuel(self):
        return self._fuel
    
    def get_speed(self):
        return self._speed

class Car(Vehicle):
    def __init__(self, speed, fuel):
        super().__init__(speed, fuel)

    def move(self):
        if self.get_fuel() > 0:
            return f"The car moves at {self.get_speed()} km/h"
        else:
            return "The car has no fuel"
        
    def printfuel(self):
        print(f"The car has {self.get_fuel() } liters of fuel")

class Bicycle(Vehicle):
    def __init__(self, speed, fuel):
        super().__init__(speed, 0)

    def move(self):
        return f"The bicycle moves at {self.get_speed()} km/h"

    def printfuel(self):
        print(f"The bicycle does not use fuel.")

def move_vehicle(vehicle):
    print(vehicle.move())

car = Car(60, 10)
bicycle = Bicycle(15, 0)

move_vehicle(car)
move_vehicle(bicycle)

car.printfuel()
bicycle.printfuel()	

car_no_fuel = Car(60, 0)
move_vehicle(car_no_fuel)

