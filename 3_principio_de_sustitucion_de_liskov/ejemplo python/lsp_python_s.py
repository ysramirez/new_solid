class Vehicle:
    def __init__(self, speed):
        self._speed = speed

    def move(self):
        return f"The vehicle moves at {self._speed} km/h"
    
    def get_speed(self):
        return self._speed

class MotorizedVehicle(Vehicle):
    def __init__(self, speed, fuel):
        super().__init__(speed)
        self._fuel = fuel

    def get_fuel(self):
        return self._fuel

class Car(MotorizedVehicle):
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
    def __init__(self, speed):
        super().__init__(speed)

    def move(self):
        return f"The bicycle moves at {self.get_speed()} km/h"
    

def move_vehicle(vehicle):
    print(vehicle.move())

car = Car(60, 10)
bicycle = Bicycle(15)

move_vehicle(car)
move_vehicle(bicycle)

car.printfuel()
car_no_fuel = Car(60, 0)